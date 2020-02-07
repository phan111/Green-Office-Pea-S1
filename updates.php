<?php
include 'connect.php';
$sql = "UPDATE detail SET 
		subtopic = 'แก้วเก็บความร้อน/ความร้อน'
		WHERE detail_id = 97";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}


?>
