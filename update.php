<?php
include 'connect.php';
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ3กฎหมายกรีน'
WHERE keyword_id = 3";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE keyword
SET keyword = 'Greenofficeแผนป้องกันและระงับอัคคีภัยกฟต.1กรีนไฟไหม้'
WHERE keyword_id = 13";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
