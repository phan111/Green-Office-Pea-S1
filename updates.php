<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1crz-pKHBeYQUA3ec_zsR4hYDmxkEyySd/view?usp=sharing'
WHERE detail_id = 63";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
