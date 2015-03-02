<?php

    // Include messages.php
    require_once('messages.php');
    // Starting the session
    session_start();

    // Reset userID variable and redirect to login page with message
    unset($_SESSION['user_id']);
    require('login.php');
    echo $msgs->print_message(0);


    // Function that creates the message div and displays it
    function print_message($id) {
        // Variables for alert type and message
        $alertType = "";
        $msg = "";

        // If statements
        if($id == 0) {
            $alertType = "alert-success";
            $msg = "You have successfully logged out.";
        }

        // Create the div
        $div = "<div class=\"alert " . $alertType . " alert-dismissable\" role=\"alert\">";
        $div .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";

        $div .= $msg . "</div>";
        return $div;
    }
?>