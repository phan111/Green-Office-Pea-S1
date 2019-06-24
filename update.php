<?php
include 'connect.php';
$sql = 'UPDATE detail
        SET reply_pc = "https://drive.google.com/file/d/17_v30KSY0RHrW1_0V5QkrMrQfJB-ARAE/view?usp=sharing",
        WHERE detail_id = 2';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
