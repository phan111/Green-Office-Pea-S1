<?php
include 'connect.php';
$sql = "UPDATE detail SET 
		keyword_id = 10
		WHERE detail_id = 98";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}


?>
