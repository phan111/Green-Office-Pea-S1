<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=12f780xoyU9QLd_rHpIOnaaJKEWc18STo'
WHERE detail_id = 100";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
