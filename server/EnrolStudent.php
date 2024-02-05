<?php
require 'dbConnection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and perform basic validation
    $full_name = trim($_POST["fullname"]);
    $dob = trim($_POST["DOB"]);
    $gender = trim($_POST["gender"]);
    $address =trim($_POST['address']);
    $email = trim($_POST["email"]);
    $mobile = trim($_POST["mobile"]);
    $program = trim($_POST['program']);
    $batch  = trim($_POST['batchno']);

    // Perform further validation and sanitization on the data
    $full_name = filter_var($full_name, FILTER_SANITIZE_STRING);
    $dob = filter_var($dob, FILTER_SANITIZE_STRING);
    $gender = filter_var($gender, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $mobile = filter_var($mobile, FILTER_SANITIZE_STRING);
    $program = filter_var($program, FILTER_SANITIZE_STRING);
    $batch  = filter_var($batch, FILTER_SANITIZE_STRING);

    if (!$full_name || !$dob || !$gender||!$email||!$mobile||!$program||!$batch) {
        $response['success'] = false;
        $response['message'] = "Invalid input data. Please check your input and try again.";
    } else {
        // Hash the password for security (Use bcrypt or a strong hashing algorithm)
        // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        function generate_student_ID() {
            // Generate 5 random alphabetical characters
            $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $student_ID_prefix = '';
            for ($i = 0; $i < 5; $i++) {
                $student_ID_prefix .= $alphabet[rand(0, strlen($alphabet) - 1)];
            }
        
            // Get the present year
            $current_year = date('Y');
        
            // Combine the prefix and year to form the student_ID
            $student_ID = $student_ID_prefix . $current_year;
        
            return $student_ID;
        }
        
        // Example usage:
        $student_ID = generate_student_ID();
        
        // Prepare the query using prepared statements
        $query = "INSERT INTO Students (Student_ID, Full_Name, Date_of_Birth, Gender, Address, Email, Phone_Number, Program, Batch_Year) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
        $stmt = mysqli_prepare($connection, $query);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssssss", $student_ID, $full_name, $dob, $gender, $address, $email, $mobile, $program, $batch);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $response['success'] = true;
            $response['message'] = "Student added successfully!";
        } else {
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
