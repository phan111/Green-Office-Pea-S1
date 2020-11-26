<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1g4uKUlRb4onpwCvQPv4T8dfmsUWBFbv_/view?usp=sharing'
WHERE detail_id = 106";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1AHmtTmsANil4umeEsovagWIVKlC9ZKNS/view?usp=sharing'
WHERE detail_id = 107";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
