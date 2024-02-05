<?php
include("dbConnection.php");

// Count students
$queryStudents = "SELECT COUNT(*) AS total_students FROM Students";
$resultStudents = mysqli_query($connection, $queryStudents);

if ($resultStudents) {
    $rowStudents = mysqli_fetch_assoc($resultStudents);
    $totalStudents = $rowStudents['total_students'];
} else {
    $totalStudents = 0;
}

// Count staff members
$queryStaff = "SELECT COUNT(*) AS total_staff FROM Users";
$resultStaff = mysqli_query($connection, $queryStaff);

if ($resultStaff) {
    $rowStaff = mysqli_fetch_assoc($resultStaff);
    $totalStaff = $rowStaff['total_staff'];
} else {
    $totalStaff = 0;
}
$totalCount = $totalStudents + $totalStaff;

$response = array(
    'totalStudents' => $totalStudents,
    'totalStaff' => $totalStaff,
    'totalCount' => $totalCount
);

header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($connection);
?>
