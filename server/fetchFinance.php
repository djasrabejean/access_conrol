<?php
include ("dbConnection.php");
if(isset($_POST["Student_ID"]))
{
    $query = "SELECT * FROM students WHERE Student_ID = '".$_POST["Student_ID"]."'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}
?>
 