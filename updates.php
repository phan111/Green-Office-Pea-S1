<?php
include 'connect.php';
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ9ทีมงานและอำนาจหน้าที่แต่ละหมวดกรีนคณะกรรมการฝ่ายบริหารผลลัพธ์การประชุมnine'
WHERE keyword_id = 6";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
