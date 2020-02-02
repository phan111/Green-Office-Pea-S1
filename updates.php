<?php
include 'connect.php';
$sql = "UPDATE detail SET 
		detail_id = 85
		WHERE detail_id = 106";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}




?>
