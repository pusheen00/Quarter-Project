<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
  //echo "Connection made!";
  $sql = "CREATE DATABASE admin";

     if (mysqli_query($conn, $sql)) {
      //  echo "Database created successfully";
     } else {
      //  echo "Error creating database: " . mysqli_error($conn);
     }

     mysqli_select_db($conn, 'admin');

     $sql = "CREATE TABLE users (
       username VARCHAR(30) NOT NULL UNIQUE,
       password VARCHAR(30) NOT NULL,
       test1 int(3),
       test2 int(3),
       test3 int(3)
     )";

     if(mysqli_query($conn, $sql)) {
       //echo "Table created successfully";
     } else {
       //echo "Error creating table ". mysqli_error($conn);
     }
}

?>
