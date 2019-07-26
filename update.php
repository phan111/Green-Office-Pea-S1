<?php
include 'connect.php';
$sql = "UPDATE detail
SET subtopic = 'ฉลากสินค้าและบริการ'
WHERE detail_id = 14";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
