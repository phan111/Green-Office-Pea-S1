<?php
include 'connect.php';
$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก เม.ย.'
WHERE detail_id = 68";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก พ.ค.'
WHERE detail_id = 69";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก มิ.ย.'
WHERE detail_id = 70";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก ก.ค.'
WHERE detail_id = 71";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก ส.ค.'
WHERE detail_id = 72";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก ก.ย.'
WHERE detail_id = 73";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET subtopic = 'ผลการเกิดก๊าซเรือนกระจก ต.ค.'
WHERE detail_id = 74";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}




mysqli_close($con);
?>
