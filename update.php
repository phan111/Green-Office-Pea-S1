<?php
include 'connect.php';
$sql = "UPDATE detail
SET subtopic = 'ปริมาณของเสียที่นำกลับมาใช้ใหม่ในแต่ละเดือน'
WHERE detail_id = 79";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
