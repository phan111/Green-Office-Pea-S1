<?php
include 'connect.php';
$sql = "UPDATE keyword
SET keyword = 'Greenofficeวิธีการใช้ถังดับเพลิงแผนป้องกันและระงับอัคคีภัยกฟต.1กรีนแผนผังขั้นตอนการปฏิบัติเมื่อเกิดเพลิงไหม้ไฟไหม้'
WHERE keyword_id = 13";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
