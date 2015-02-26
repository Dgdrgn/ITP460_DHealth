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
        // Creates error message
        $errormsg = 1;
        echo print_error($errormsg);
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
            $errormsg = 1;
        }
        // Access the userID if there was a username and password match
        else {
            $row = mysqli_fetch_array($results);
            $userID = $row['user_id'];
        }
    }

    // If there was an error message, display it
    if($errormsg > 0) {
        /* TODO: Add the login page file */
        require('');

        // Creates error message
        echo print_error($errormsg);
        exit();
    }
    // If there was not, lead the user to the portal page
    else {
        // Stores userID to check anytime the user enters a new page
        $_SESSION['user_id'] = $userID;
        // Stores the time logged in
        $_SESSION['timestamp'] = time();

        /* TODO: Add the Portal page file */
        require('');
    }

    // Function that creates the error div and displays it
    function print_error($id) {
        $div = "<p class=\"alert alert-danger alert-dismissable\" role=\"alert\">";
        $div .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
        if($id == 1) {
            $div .= "<strong>Login failed.</strong> Please enter a correct username and password.";
        }
        $div .= "</p>";
        return $div;
    }
?>