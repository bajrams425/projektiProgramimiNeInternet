<?php
//parametrat
  $servername ="localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "usersdatabase";

  $conn=mysqli_connect($servername,
  $dbUsername, $dbPassword, $dbName);

  if(!$conn){
    die("Sucker".mysqli_connect_error());
  }
?>
