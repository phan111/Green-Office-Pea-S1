<?php
include 'connect.php';
$sql = 'UPDATE keyword
        SET keyword = "Greenofficeข้อ1นโยบายกรีน",
        SET topic = "นโยบายสิ่งแวดล้อม"
        WHERE detail_id = 1';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
