<?php
include("dbConnection.php");
if (isset($_POST["User_ID"])) {
    $query = "SELECT * FROM Users WHERE User_ID= '" . $_POST["User_ID"] . "'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}
