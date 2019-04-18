<?php
$server = "us-cdbr-iron-east-03.cleardb.net";
$username = "bcc62c80f44ddb";
$password = "13c350a1";
$db = "heroku_31f1dcbaacb6adb";
$con = mysqli_connect($server, $username, $password, $db);
mysqli_set_charset($con, "utf8");
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
  echo 'connected<br>';
}
?>
