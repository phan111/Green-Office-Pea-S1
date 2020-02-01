<?php
include 'connect.php';
$sql = "UPDATE detail SET 
		reply_pc = 'https://drive.google.com/open?id=1mnZPlgW9mTMReieN--fpurwr6RoUpfSg'
		WHERE detail_id = 2";
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}


?>
