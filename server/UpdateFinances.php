
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("dbConnection.php");
if(isset($_POST["Student_ID"]))
{
    $studentID=trim($_POST["Student_ID"]);
    $transactionDate= trim($_POST['Transaction_Date']);
    $transactionType= trim($_POST['Transaction_Type']);
    $amount= trim($_POST['Amount']);
   
   
    // Perform further validation and sanitization on the data
    $transactionDate = filter_var($transactionDate, FILTER_SANITIZE_STRING);
    $transactionType = filter_var($transactionType, FILTER_SANITIZE_STRING);
    $amount = filter_var($amount, FILTER_SANITIZE_STRING);
    

    if (!$transactionDate || !$transactionType || !$amount) {
        // Set the error message in the response array
        $response['success'] = false;
        $response['message'] = "Invalid input data.";
    } else {
        

        // Prepare the query using prepared statements
        $query = "INSERT INTO financialtransactions (Student_ID, Transaction_Date, Transaction_Type,Amount) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssss", $studentID, $transactionDate, $transactionType, $amount);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Set the success message in the response array
         
            echo "Data Updated Successfully!";
        } else {
            // Set the error message in the response array
            echo "Error: " . mysqli_error($connection);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }

    // Close the database connection
    mysqli_close($connection);

    // Send the JSON response
 
}
 
?>
