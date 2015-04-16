<?php
    // Checks if the user is logged in
    if(!isset($_SESSION['user_id'])) {
        require('login/index.php');
    }
    else {
        require('home/index.php');
    }

?>