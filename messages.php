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
            // If no messages
            if($id == 0) {
                return;
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
            // If successfully created a new account
            if ($id == 3) {
                $alertType = "alert-success";
                $msg = "<strong>Congratulations!</strong> You have created your account. Now add a child by clicking <a class=\"alert-link\" href=\"index.php\">here</a>!";
            }
            // If account (email) already exists
            if ($id == 4) {
                $alertType = "alert-danger";
                $msg = "<strong>Sorry!</strong> An account with this email already exists! Please use a different email or login <a class=\"alert-link\" href=\"index.php\">here</a>.";
            }
            // If successfully added a child
            if ($id == 5) {
                $alertType = "alert-success";
                $msg = "<strong>Congratulations!</strong> You have successfully added your child!";
            }
            // If code and birthday do not match
            if ($id == 6) {
                $alertType = "alert-danger";
                $msg = "<strong>Oops!</strong> The birthdates do not match.";
            }
            // If child is not in database
            if ($id == 7) {
                $alertType = "alert-danger";
                $msg = "<strong>Sorry!</strong> The child is not found.";
            }
            // If logout is successful
            if ($id == 8) {
                $alertType = "alert-success";
                $msg = "You have successfully logged out.";
            }
            if ($id == 9) {
                $alertType = "alert-danger";
                $msg = "<strong>Sorry!</strong> The child is already in our records.";
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