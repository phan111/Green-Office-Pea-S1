<?php
include 'connect.php';
$sql = "UPDATE detail
SET subtopic = 'ฉลากสินค้าและบริการ', reply_pc = "https://drive.google.com/file/d/1AdYZAagTE6rmq4Qp1mA01MtnIbUvYmrM/view?usp=sharing"
WHERE detail_id = 14";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
