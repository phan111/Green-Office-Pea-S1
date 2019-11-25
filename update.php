<?php
include 'connect.php';
$sql = "UPDATE detail
SET keyword_id = 5
WHERE detail_id = 65";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
