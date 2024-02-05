<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "dbConnection.php";

// Get the list of columns for ordering
$columns = array(
    'Users.Full_Name',
    'Users.Username',
    'Users.Email',
    'Users.Phone_Number',
    'Users.Role'
);

$count = 1;

// Base query to select all data from the Student table
$query = "SELECT * FROM Users ";

// Sorting
if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order'][0]['column']] . ' ' . $_POST['order'][0]['dir'] . ' ';
} else {
    $query .= 'ORDER BY User_ID DESC ';
}

// Limiting and Pagination
$query1 = '';
if (isset($_POST["length"]) && $_POST["length"] != -1 && isset($_POST["start"])) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

try {
    $stmt = $connection->prepare($query . $query1);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $sub_array = array();
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["User_ID"] . '" data-column="Fullname">' . $row['Full_Name'] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["User_ID"] . '" data-column="Username">' . $row["Username"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["User_ID"] . '" data-column="mail">' . $row["Email"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["User_ID"] . '" data-column="mobile">' . $row["Phone_Number"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["User_ID"] . '" data-column="Role">' . $row["Role"] . '</div>';
        
        $data[] = $sub_array;
        $count++;
    }

    // Function to get the total number of records
    function get_total_records($connection)
    {
        $query = "SELECT COUNT(*) AS total FROM Users";
        $result = $connection->query($query);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    $output = array(
        "draw" => isset($_POST["draw"]) ? intval($_POST["draw"]) : 0,
        "recordsTotal" => get_total_records($connection),
        "recordsFiltered" => get_total_records($connection),
        "data" => $data
    );

    echo json_encode($output);
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}
