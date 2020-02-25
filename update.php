<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1RUAeP4AWH63Qhg0R-gO0wTt989uPbgnW'
WHERE detail_id = 27";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1fQJfSOJSAd3w6aJFZNNs-T7exansYa_v'
WHERE detail_id = 22";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
