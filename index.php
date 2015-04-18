<?php
    session_start();
    // Checks if the user is logged in
    if(isset($_SESSION['user_id'])) {
        header('Location: home/');
    }
    else {
        header('Location: login/');
    }

?>