<?php

    // Include messages.php
    require_once('messages.php');
    // Starting the session
    session_start();

    // Checks if the user is logged in
    if(!isset($_SESSION['user_id'])) {
        // Display error message
        $_SESSION['messages'] = 2;
        $_SESSION['accessing_page'] = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
        // User is not logged in
        header('Location: ../');
        exit();
    }

    // User is logged in. Continue.

    // Remove accessing_page
    unset($_SESSION['accessing_page']);
?>