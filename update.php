<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pd = 'https://drive.google.com/file/d/1Q43_jNgRoY-rHq_jVOIS4Y0BrBg_ssYo/view?usp=sharing'
WHERE detail_id = 43";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
