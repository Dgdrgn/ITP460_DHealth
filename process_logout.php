<?php

    // Include messages.php
    require_once('messages.php');
    // Starting the session
    session_start();

    // Reset userID variable and redirect to login page with message
    unset($_SESSION['user_id']);
    $_SESSION['messages'] = 8;
    header('Location: ../');

?>