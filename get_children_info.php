<?php
// Include config.php
require_once('config.php');
// Include messages.php
require_once('messages.php');

// Starting the session
session_start();

// Get AJAX filter variable (id)
$id = $_GET['filter'];

// Get JSON info using id
$results = json_decode(file_get_contents('https://ped-akido.herokuapp.com/patients/' . $id . '/observations'), true);
$jsonChild = $results['observations'];

echo json_encode($jsonChild);
?>