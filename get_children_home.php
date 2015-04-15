<?php
    // Include config.php
    require_once('config.php');
    // Include messages.php
    require_once('messages.php');

    // Starting the session
    session_start();



    // Get JSON info using code
    $jsonChild = file_get_contents('http://api.akidolabs.com/patients?app_id=' . APPID . '&app_key=' . APPKEY);
    $patients = json_decode($jsonChild);
    $child = get_child($patients, $code);
?>