<?php
include 'connect.php';
$sql = 'UPDATE detail
        SET reply_pc = "https://drive.google.com/file/d/11z7-83ysHW8Sfj7pnZIaM9SIMkpkkdxF/view?usp=sharing"
        WHERE detail_id = 32';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
