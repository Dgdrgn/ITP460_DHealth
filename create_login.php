<?php

    // Include messages.php
    require_once('messages.php');
    // Include password hash
    require("PasswordHash.php");
    // Starting the session
    session_start();

    // Store create an account information
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    // Construct class for hashing
    $hasher = new PasswordHash(8, false);

    // Create hash variable to store hash
    $hash = $hasher->HashPassword($password);

    // SQL Statement that looks up user in database
    $sql = 'INSERT INTO UsersAdmin (user_name, user_pw) values ("' . $username . '", "' . $hash . '")';

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

?>