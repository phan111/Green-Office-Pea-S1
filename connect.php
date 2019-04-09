<?php
  $server = "us-cdbr-iron-east-03.cleardb.net";
  $username = "	bcc62c80f44ddb";
  $password = "13c350a1";
  $db = "heroku_31f1dcbaacb6adb";
  $conn = new mysqli($server, $username, $password, $db);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }else{
    echo "db connected!";
  }
  mysqli_query($conn, "SET NAMES utf8");
?>
