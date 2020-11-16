<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1pMq8eCFh1t-DTk4wQMjBiDkrFyJGhboC/view?usp=sharing'
WHERE detail_id = 104";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1UnSJKwkp7Smq8vPP_jSAuMl9BQ08Osdz/view?usp=sharing'
WHERE detail_id = 105";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1pMq8eCFh1t-DTk4wQMjBiDkrFyJGhboC/view?usp=sharing'
WHERE detail_id = 106";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1pMq8eCFh1t-DTk4wQMjBiDkrFyJGhboC/view?usp=sharing'
WHERE detail_id = 107";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1mNYJqTqcBlbK5lMqScCDMe2FjNoRn-u_/view?usp=sharing'
WHERE detail_id = 108";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
