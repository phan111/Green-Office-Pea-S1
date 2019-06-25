<?php
include 'connect.php';
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ7สินค้าบริการที่เป็นมิตรกับสิ่งแวดล้อมกรีนฉลากสินค้าโรงแรมสีเขียวอุปกรณ์'
WHERE keyword_id = 7";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
