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
        if (!compare_dates($birthdate, $child[0]['birthdate'])) {
            // Birthdates did not match
            $_SESSION['messages'] = 6;
            header('Location: add_child/');
            exit();
        } else {
            // SQL Statement that looks up user in database
            $sqlSteal = 'SELECT * FROM ' . T2 . ' WHERE child_id = "' . $code . '"';
            $sql = 'INSERT INTO ' . T2 . ' (user_id, child_id, age_group) values ("' . $_SESSION['user_id'] . '", "' . $code . '", "' . age_group($birthdate) . '")';

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
        $date1 = new DateTime($d1);
        $date2 = new DateTime($d2);
        if($date1->format("Y-m-d") == $date2->format("Y-m-d")) {
            return true;
        }
        return false;
    }

    // Assigns age group
    function age_group($dob) {
        $birth = new DateTime($dob);
        $now = new DateTime();

        $d1 = $birth->format("Y-m-d");
        $d2 = $now->format("Y-m-d");

        $years = intval(substr($d2, 0, 4)) - intval(substr($d1, 0, 4));
        $months = intval(substr($d2, 5, 2)) - intval(substr($d1, 5, 2));
        $days = intval(substr($d2, 8, 2)) - intval(substr($d1, 8, 2));

        if($days < 0) {
            $months--;
        }
        if($months < 0) {
            $years--;
            $months = 12 + $months;
        }

        $group = 0;
        if($years == 0 && $months < 6) {
            $group = 1;
        }
        else if(($years == 0 && $months > 5)) {
            $group = 2;
        }
        else if($years == 1) {
            $group = 3;
        }
        else if($years == 2) {
            $group = 4;
        }
        else {
            $group = 5;
        }
        return $group;
    }
?>