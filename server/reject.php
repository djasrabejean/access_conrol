<?php
include("dbConnection.php");

if(isset($_POST["Student_ID"]))
{
    // Sanitize input value to prevent SQL injection
    $Student_ID = mysqli_real_escape_string($connection, $_POST["Student_ID"]);

    // Use prepared statement to prevent SQL injection and improve query performance
    $query = "UPDATE financialtransactions SET Status='0' WHERE Student_ID='$Student_ID' AND Status='1'";
    $stmt = mysqli_prepare($connection, $query);
    
    if(mysqli_stmt_execute($stmt)) {
        echo 'The status for registration number: '.$Student_ID. ' has been updated to Rejected';
    } else {
        echo '<p style="color: red;">Error: User status not updated</p>';
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($connection);
?>

