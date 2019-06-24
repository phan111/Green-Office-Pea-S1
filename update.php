<?php
include 'connect.php';
$sql = INSERT INTO keyword (keyword_id, keyword, topic )
VALUES (6, 'Greenofficeข้อ6ผลการใช้ทรัพยากร พลังงาน และของเสียกรีนพฤษภาคมพค', 'ผลการใช้ทรัพยากร พลังงาน และของเสีย')';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
