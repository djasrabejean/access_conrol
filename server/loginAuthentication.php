<?php
session_start();
require 'dbConnection.php';
// Create an associative array to store the response
$response = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and perform basic validation
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    // Perform further validation and sanitization on the data
    $username = filter_var($username, FILTER_SANITIZE_STRING);

    if (!$username || !$password) {
        // Set the error message in the response array
        $response['success'] = false;
        $response['message'] = "Invalid input data. Please check your input and try again.";
    } else {
        // Prepare the query using prepared statements
        $query = "SELECT User_ID, Password, Role FROM Users WHERE Username = ?";
        $stmt = mysqli_prepare($connection, $query);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "s", $username);

        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Bind the result to variables
        mysqli_stmt_bind_result($stmt, $User_ID, $hashed_password, $role);

        // Fetch the result
        if (mysqli_stmt_fetch($stmt)) {
            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, login successful
                $response['success'] = true;
                $response['message'] = "Wait Login....";
                $response['User_ID'] = $User_ID;
                $_SESSION['User_ID'] =$User_ID;
                $response['Role'] = $role;
            } else {
                // Password is incorrect
                $response['success'] = false;
                $response['message'] = "Incorrect username or password.";
            }
        } else {
            // Username not found
            $response['success'] = false;
            $response['message'] = "Incorrect username or password.";
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }

    // Close the database connection
    mysqli_close($connection);

    // Send the JSON response
    echo json_encode($response);
}
?>
