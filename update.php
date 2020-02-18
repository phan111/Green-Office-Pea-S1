<?php
include 'connect.php';
$sql = "UPDATE detail
SET subtopic = 'แก้วกักเก็บความเย็น'
WHERE detail_id = 97";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
