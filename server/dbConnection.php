<?php
 // Connect to the database (Replace 'your_host', 'your_username', 'your_password', and 'your_database' with actual values)
 $connection = mysqli_connect('localhost', 'root', '', 'dashboard');

 // Check if the connection was successful
 if (!$connection) {
     die("Database connection failed: " . mysqli_connect_error());
 }
//  else{
//     echo"connected successfully";
//  }
?>