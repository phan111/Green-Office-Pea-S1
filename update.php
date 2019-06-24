<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, , reply_pc, subtopic )
VALUES (44, 'https://drive.google.com/file/d/1gcWpB_JhjLJnU3-Wuo0ogpiBDth8ub4t/view?usp=sharing', 6, 'วิธีการคำนวณ')";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
