<?php

// Include config.php
require_once('config.php');
// Include messages.php
require_once('messages.php');

// Starting the session
session_start();

// Get user id from AJAX variable
$userID = $_SESSION['user_id'];

// SQL Statement that looks up user in database
$sql = 'SELECT * FROM ' . T2 . ' WHERE user_id = "' . $userID . '"';

$database = mysqli_connect(HOST, USER, PW, DB);

// Checks if connection worked
if(mysqli_connect_error() != 0) {
    die("Error connecting to the database. The error is: " . mysqli_connect_error());
}

// Look up table and store results
$results = mysqli_query($database, $sql);

// Check if results is empty due to errors
if(!$results) {
    die("Query failed. Error is: " . mysqli_query_error());
}

$mcn = array();

// Iterate through results and add to array
while($row = mysqli_fetch_array($results)) {
    array_push($mcn, $row['child_id']);
}

echo json_encode($mcn);

?>