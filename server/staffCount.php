<?php
include("dbConnection.php");

$query = "SELECT COUNT(*) AS total_students FROM Students";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_students = $row['total_students'];
    echo "Total number of students: $total_students";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
