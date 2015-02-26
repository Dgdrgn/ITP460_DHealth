<?php
    // Starts a session
    session_start();

    // Checks if the user is logged in
    if(!isset($_SESSION['user_id'])) {
        // User is not logged in
        /** TO DO: Add the login page file **/
        require('');
        exit();
    }

    // User is logged in. Continue.
?>