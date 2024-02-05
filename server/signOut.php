<?php
// Start the session
session_start();
require 'dbConnection.php';
// Create an associative array to store the response
$response = array();
// Check if the user is logged in
if (isset($_SESSION['User_ID'])) {
    // Clear the session data (you can modify this to perform any other logout actions)
    session_unset();
    session_destroy();
    // Set the response status and message for successful logout
    $response['status'] = 1;
    $response['message'] = "Logout successful!";
} else {
    // Set the response status and message for failed logout (user not logged in)
    $response['status'] = 0;
    $response['message'] = "User not logged in!";
}

// Send the JSON response
echo json_encode($response);
?>
