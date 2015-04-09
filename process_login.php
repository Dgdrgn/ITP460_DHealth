<?php

    // Include config.php
    require_once('config.php');
    // Include messages.php
    require_once('messages.php');
    // Include password hash
    require("PasswordHash.php");
    // Starting the session
    session_start();

    // Store the login form variables
    $username = $_GET['usermail'];
    $password = $_GET['password'];

    // Variables to store future ID that is acquired
    $userID = "";

    // Construct class for hashing
    $hasher = new PasswordHash(8, false);

    // Create hash variable to store hash
    $hash = "*";

    // SQL Statement that looks up user in database
    $sql = 'SELECT * FROM ' . T1 . ' WHERE user_email = "' . $username . '"';

    $database = mysqli_connect(HOST, USER, PW, DB);

    // Checks if connection worked
    if(mysqli_connect_error() != 0) {
        die("Error connecting to the database. The error is: " . mysqli_connect_error());
    }

    // Look up table and store results
    $results = mysqli_query($database, $sql);

    // Check if results is empty due to errors
    if(!$results) {
        die("Query failed. Error is: " . mysqli_query_error());
    }

    // Checks if results is empty because user does not exist
    if(mysqli_num_rows($results) == 0) {
        require('login.php');

        // Creates error message
        echo $msgs->print_message(1);
        exit();
    }
    // Access the userID if there was a username and password match
    else {
        $r = mysqli_fetch_array($results);
        $hash = $r['hash'];
        $check = $hasher->CheckPassword($password, $hash);

        if($check) {
            $row = $r;
            $userID = $row['user_id'];
        }
        else {
            require('login.php');

            // Creates error message
            echo $msgs->print_message(1);
            exit();
        }
    }

    // Stores userID to check anytime the user enters a new page
    $_SESSION['user_id'] = $userID;
    // Stores the time logged in
    $_SESSION['timestamp'] = time();

    // If the user was trying to access a different page
    /*if($_SESSION['accessing_page']) {
        // Lead the user to the page being accessed
        require($_SESSION['accessing_page']);
        // Remove variable accessing_page
        unset($_SESSION['acessing_page']);
    }*/
    // Lead the user to the portal page
    require('home.php');
    exit();
?>