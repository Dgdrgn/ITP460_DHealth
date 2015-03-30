<?php
    // Checks if the user is logged in
    if(!isset($_SESSION['user_id'])) {
        require('login.php');
    }
    else {
        require('home.php');
    }

?>