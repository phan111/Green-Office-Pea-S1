<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1555c7HR98BSgumbGD4QhB_ospzOuAMRw/view?usp=sharing'
WHERE detail_id = 23";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1KT_hIFOewEwU-XsFffaydST4jjShZv8B/view?usp=sharing'
WHERE detail_id = 24";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/147FhSZuij2JFEXEHNP_y6-Ri8nFa1Rj8/view?usp=sharing'
WHERE detail_id = 25";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1uXXWRwv_blVQUZuc582UXpI5fXGvTih5/view?usp=sharing'
WHERE detail_id = 26";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/13SAqfSdeua7uPY3QOuanVzhEgAVkrh9m/view?usp=sharing'
WHERE detail_id = 27";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1vu7830ZRVsqU_M2vUiLPD9Fv5mmrj6O9/view?usp=sharing'
WHERE detail_id = 28";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
