<?php
require 'dbConnection.php';

// Create an associative array to store the response
$response = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and perform basic validation
    $full_name = trim($_POST["full_name"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $email = trim($_POST["email"]);
    $phone = trim($_POST["mobile"]);
    $role = trim($_POST["security_level"]);

    // Perform further validation and sanitization on the data
    $full_name = filter_var($full_name, FILTER_SANITIZE_STRING);
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $role = filter_var($role, FILTER_SANITIZE_STRING);

    if (!$full_name || !$username || !$email || !$phone) {
        // Set the error message in the response array
        $response['success'] = false;
        $response['message'] = "Invalid input data. Please check your input and try again.";
    } else {
        // Hash the password for security (Use bcrypt or a strong hashing algorithm)
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare the query using prepared statements
        $query = "INSERT INTO Users (Full_Name, Username, Password, Email, Phone_Number, Role) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $username, $hashed_password, $email, $phone,$role);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Set the success message in the response array
            $response['success'] = true;
            $response['message'] = "Administrator registered successfully!";
        } else {
            // Set the error message in the response array
            $response['success'] = false;
            $response['message'] = "Error: " . mysqli_error($connection);
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
