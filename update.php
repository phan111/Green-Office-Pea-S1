<?php
include 'connect.php';
$sql = 'UPDATE detail
        SET reply = "line://app/1556091170-O9nZo3E3"
        WHERE keyword_id = 1';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
