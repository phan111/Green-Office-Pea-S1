<?php
include 'connect.php';
$sql = "UPDATE detail
SET keyword_id = 14
WHERE detail_id = 82";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET keyword_id = 14
WHERE detail_id = 83";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET keyword_id = 14
WHERE detail_id = 84";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
