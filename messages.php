<?php

/* Alert Types
 * Green -> alert-success
 * Blue -> alert-info
 * Yellow -> alert-warning
 * Red -> alert-danger
 */

    /* Messages is a class that contains every message that will
     * be used in the app, such as login error messages or logout
     * success messages.
    */
    class Messages {
        /* Properties */
        private $alertType;  // Stores the type of alert message
        private $msg;        // Stores the message

        /* Methods */
        // Function that creates the message div and displays it
        // using an ID to select what message to display
        function print_message($id)
        {
            /* If statements */
            // If logout is successful
            if ($id == 0) {
                $alertType = "alert-success";
                $msg = "You have successfully logged out.";
            }
            // If login fails
            if ($id == 1) {
                $alertType = "alert-danger";
                $msg = "<strong>Login failed.</strong> Please enter a correct username and password.";
            }
            // If trying to access a page without logged in
            if ($id == 2) {
                $alertType = "alert-danger";
                $msg = "<strong>Oops!</strong> Please login to access this page.";
            }

            // Create the div
            $div = "<div class=\"alert " . $alertType . " alert-dismissable\" role=\"alert\">";
            $div .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";

            $div .= $msg . "</div>";
            return $div;
        }
    }

    $msgs = new Messages;
?>