<?php
include 'connect.php';
$sql = "UPDATE detail SET 
		detail_id = 75
		WHERE detail_id = 86";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}




?>
