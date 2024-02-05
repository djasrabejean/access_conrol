
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("dbConnection.php");
if (isset($_POST["User_ID"])) {
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $role = $_POST['role'];

    $query = "UPDATE  `Users` SET Full_Name='$fullname', Username='$username', Phone_Number='$mobile',Email='$email', Role='$role' WHERE User_ID='" . $_POST["User_ID"] . "'";

    if ($result = mysqli_query($connection, $query)) {
        echo 'student  info updated successfully';
    } else {
        echo '<p style="color: red;">error student  not updated</p>';
    }
}
?>
