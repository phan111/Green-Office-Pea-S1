<?php
include 'connect.php';
$sql = "UPDATE detail SET 
		reply_pc = 'https://drive.google.com/open?id=13ZO0-7uDRmwP2ttOGAnd_Jlo6dCeqNKV'
		WHERE detail_id = 97";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE detail SET 
		detail_id = 'https://drive.google.com/open?id=13ZO0-7uDRmwP2ttOGAnd_Jlo6dCeqNKV'
		WHERE detail_id = 98";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE detail SET 
		detail_id = 89
		WHERE detail_id = 102";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}

?>
