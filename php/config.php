<?php
  $hostname = "localhost";
  $username = "chatapp_root";
  $password = "Yh8HaJH4s]GeIOuz";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
