<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1OeN0s7ER_OBLDch4cq16RbnjCT5OQ5G1/view?usp=sharing'
WHERE detail_id = 1";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1g6cognNw21ZkH5mQh9qHBaXFW8R99bJT/view?usp=sharing'
WHERE detail_id = 32";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1uovsp_23aC0q8sLpwQfEyLOR7k1gxGIA/view?usp=sharing'
WHERE detail_id = 3";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1hbvwUTWDRLUmLKgD59HzDLfitWdRLEAH/view?usp=sharing'
WHERE detail_id = 5";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/16tYGww1-teO1McF7s0sq4DJ6mW22n6qU/view?usp=sharing'
WHERE detail_id = 6";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1ZMGYaG1sT5dqKjfo20QSi1HeIvhLa9D2/view?usp=sharing'
WHERE detail_id = 7";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
