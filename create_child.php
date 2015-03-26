<?php

    // Include config.php
    require_once('config.php');
    // Include messages.php
    require_once('messages.php');
    // Include password hash
    require("PasswordHash.php");
    // Starting the session
    session_start();

    // Store create a child information
    $code = $_POST['code'];
    $birthdate = $_POST['birthdate'];

    // Get JSON info using code
    /* TODO: Get JSON info using code */

    // Compare birthdate to JSON birthdate
    /* TODO: Compare JSON birthdate to birthdate */
    if(false) {
        /* TODO: Send error and return to signup form */

    }
    else {
        // SQL Statement that looks up user in database
        $sql = 'INSERT INTO ' . $T1 . ' (user_id, child_id) values ("' . $_SESSION['user_id'] . '", "' . $code . '")';

        $database = mysqli_connect($HOST, $USER, $PW, $DB);

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

        /* TODO: Success Message */
    }
?>