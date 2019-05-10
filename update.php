<?php
include 'connect.php';
$sql = 'UPDATE detail
        SET keyword_id = 10
        WHERE detail_id = 42';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
