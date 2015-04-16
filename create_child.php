<?php

    // Include config.php
    require_once('config.php');
    // Include messages.php
    require_once('messages.php');
    // Include password hash
    require_once("PasswordHash.php");
    // Starting the session
    session_start();

    // Store create a child information
    $code = $_POST['code'];
    $birthdate = $_POST['birthdate'];

    // Get JSON info using code
    $child = file_get_contents('https://ped-akido.herokuapp.com/patients?mrn=' . $code);

    // If child does not exist
    if($child == null) {
        header('Location: add_child/');
        $msgs->print_message(7);
        exit();
    }
    else {
        // Compare birthdate to JSON birthdate
        if (compare_dates($birthdate, $child->birthdate)) {
            // Birthdates did not match
            header('Location: add_child/');
            $msgs->print_message(6);
            exit();
        } else {
            // SQL Statement that looks up user in database
            $sql = 'INSERT INTO ' . T1 . ' (user_id, child_id) values ("' . $_SESSION['user_id'] . '", "' . $code . '")';

            $database = mysqli_connect(HOST, USER, PW, DB);

            // Checks if connection worked
            if (mysqli_connect_error() != 0) {
                die("Error connecting to the database. The error is: " . mysqli_connect_error());
            }

            // Look up table and store results
            $results = mysqli_query($database, $sql);

            // Check if results is empty due to errors
            if (!$results) {
                die("Query failed. Error is: " . mysqli_query_error());
            }

            require('index.php');
            $msgs->print_message(5);
        }
    }

    // Compares two dates
    function compare_dates($d1, $d2) {
        $date1 = strtotime($d1);
        $date2 = strtotime($d2);
        if((date("Y", $date1) != date("Y", $date2)) || (date("m", $date1) != date("m", $date2)) || (date("d", $date1) != date("d", $date2))) {
            return false;
        }
        return true;
    }
?>