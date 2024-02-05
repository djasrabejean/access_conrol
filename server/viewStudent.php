<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "dbConnection.php";

// Get the list of columns for ordering
$columns = array(
    'Students.Student_ID',
    'Students.Full_Name',
    'Students.Date_of_Birth',
    'Students.Gender',
    'Students.Address',
    'Students.Email',
    'Students.Phone_Number',
    'Students.Program',
    'Students.Batch_Year'
);

$count = 1;

// Base query to select all data from the Student table
$query = "SELECT * FROM Students ";

// Sorting
if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order'][0]['column']] . ' ' . $_POST['order'][0]['dir'] . ' ';
} else {
    $query .= 'ORDER BY Student_ID DESC ';
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
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="Student_ID">' . $row['Student_ID']. '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="Student_Name">' . $row["Full_Name"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="DOB">' . $row["Date_of_Birth"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="mail">' . $row["Email"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="address">' . $row["Address"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="Gender">' . $row["Gender"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="mobile">' . $row["Phone_Number"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="Program">' . $row["Program"] . '</div>';
        $sub_array[] = '<div style="font-size: 12px;" data-id="' . $row["Student_ID"] . '" data-column="Batch_Year">' . $row["Batch_Year"] . '</div>';
        $sub_array[] = '<button type="button" name="edit" class="btn btn-success btn-sm btn-xs edit" id="' . $row["Student_ID"] . '">Edit</button>';
        

        $data[] = $sub_array;
        $count++;
    }

    // Function to get the total number of records
    function get_total_records($connection)
    {
        $query = "SELECT COUNT(*) AS total FROM Students";
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
?>
