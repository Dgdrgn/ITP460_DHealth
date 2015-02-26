<?php

    // Starting the session
    session_start();

    // Store the login form variables
    /* TODO: Change variable names in POST to match form names */
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Variables to store future information
    $errormsg = "";
    $userID = "";

    // SQL Statement that looks up user in database
    $sql = 'SELECT * FROM Users WHERE user_name = "' . $username . '" && user_password = "' . $password . '"';

    // Checks if any of the form fields are empty
    if(empty($username) || empty ($password)) {
        /* TODO: Add the login page file */
        require('');
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
            $errormsg = "Login failed. Please enter a correct username and password.";
        }
    }
?>