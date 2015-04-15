<?php
    // Checks if the user is logged in
    if(!isset($_SESSION['user_id'])) {
        require('index.php');
    }
    else {
        require('index.php');
    }

?>