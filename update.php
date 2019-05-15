<?php
include 'connect.php';
$sql = 'UPDATE detail
        SET reply_pc = "https://drive.google.com/file/d/1zCa4BeWOVaTLsmuix_BAFxF6eIlCXQIT/view?usp=sharing"
        WHERE detail_id = 33';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
