<?php
  $hostname = "localhost";
  $username = "id19120018_root";
  $password = "tR-h|YomMV[}O3Ty";
  $dbname = "id19120018_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
