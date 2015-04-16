<?php

    // Include config.php
    require_once('config.php');
    // Include messages.php
    require_once('messages.php');

    // Starting the session
    session_start();

    // Get user id from AJAX variable
    $userID = $_SESSION['user_id'];

    // SQL Statement that looks up user in database
    $sql = 'SELECT * FROM ' . T1 . ' WHERE user_id = "' . $userID . '"';

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

    // Get name and return
    $r = mysqli_fetch_array($results);
    $name = $r['first_name'] . " " . $r['last_name'];
    echo $name;

?>