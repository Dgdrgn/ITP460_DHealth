<?php

    // Include messages.php
    require_once('messages.php');
    // Starting the session
    session_start();

    // Store the login form variables
    /* TODO: Change variable names in POST to match form names */
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Variables to store future ID that is acquired
    $userID = "";

    // SQL Statement that looks up user in database
    $sql = 'SELECT * FROM Users WHERE user_name = "' . $username . '" && user_password = "' . $password . '"';

    // Checks if any of the form fields are empty
    if(empty($username) || empty ($password)) {
        /* TODO: Add the login page file */
        require('');
        // Creates login error message
        echo $msgs->print_message(1);
        exit();
    }
    else {
        /* TODO: Add server, username, password, and table name */
        $database = mysqli_connect('', '', '', '');

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
            /* TODO: Add the login page file */
            require('');

            // Creates error message
            echo print_error(1);
            exit();
        }
        // Access the userID if there was a username and password match
        else {
            $row = mysqli_fetch_array($results);
            $userID = $row['user_id'];
        }
    }

    // Stores userID to check anytime the user enters a new page
    $_SESSION['user_id'] = $userID;
    // Stores the time logged in
    $_SESSION['timestamp'] = time();

    // If the user was trying to access a different page
    if($_SESSION['accessing_page']) {
        // Lead the user to the page being accessed
        require($_SESSION['accessing_page']);
        // Remove variable accessing_page
        unset($_SESSION['acessing_page']);
    }
    // Lead the user to the portal page
    /* TODO: Add the Portal page file */
    require('');
?>