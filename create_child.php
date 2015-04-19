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
    $results = json_decode(file_get_contents('https://ped-akido.herokuapp.com/patients?mrn=' . $code), true);
    $child = $results['patients'];
    // If child does not exist
    if(count($child) == 0) {
        $_SESSION['messages'] = 7;
        header('Location: add_child/');
        exit();
    }
    else {
        // Compare birthdate to JSON birthdate
        if (compare_dates($birthdate, $child[0]['birthdate'])) {
            // Birthdates did not match
            $_SESSION['messages'] = 6;
            header('Location: add_child/');
            exit();
        } else {
            // SQL Statement that looks up user in database
            $sql = 'INSERT INTO ' . T2 . ' (user_id, child_id, gender) values ("' . $_SESSION['user_id'] . '", "' . $code . '", "' . $child[0]['gender'] . '")';

            $database = mysqli_connect(HOST, USER, PW, DB);

            // Checks if connection worked
            if (mysqli_connect_error() != 0) {
                die("Error connecting to the database. The error is: " . mysqli_connect_error());
            }

            // Look up table and store results
            $results = mysqli_query($database, $sql);

            $_SESSION['messages'] = 5;
            require('index.php');
        }
    }

    // Compares two dates
    function compare_dates($d1, $d2) {
        $date1 = strtotime($d1);
        $date2 = strtotime($d2);
        if(!strcmp(substr($date1, 0, 6), substr($date2, 0, 6))) {
            return false;
        }
        return true;
    }
?>