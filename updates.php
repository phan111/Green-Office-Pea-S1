<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1QovgCEp2MMT60yKnV9BGTNH8czhG7hqj'
WHERE detail_id = 30";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
