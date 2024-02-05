
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("dbConnection.php");
if(isset($_POST["Student_ID"]))
{
    $fullname=$_POST['fullname'];
    $dob=$_POST['DOB'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $mail=$_POST['email'];
    $mobile=$_POST['mobile'];
    $program=$_POST['program'];
    $batch=$_POST['batchno'];


    $query = "UPDATE  `Students` SET Full_Name='$fullname', Date_of_Birth='$dob', Gender='$gender',Address='$address', Email='$mail', Phone_Number='$mobile', Program='$program', Batch_Year='$batch' WHERE Student_ID='".$_POST["Student_ID"]."'";

    if($result = mysqli_query($connection, $query)){
        echo 'student  info updated successfully';
    }else{
        echo '<p style="color: red;">error student  not updated</p>';
    }
}
?>
