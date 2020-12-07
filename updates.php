<?php
include 'connect.php';
$sql = "UPDATE keyword
SET topic = 'โครงการภายในพื้นที่สำนักงาน กฟต.1.'
WHERE keyword_id = 14";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
