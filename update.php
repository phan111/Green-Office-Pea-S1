<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1q8hI8Vww526nYCTrjqw_s_ge3aHBFpJB/view?usp=sharing'
WHERE detail_id = 2";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
