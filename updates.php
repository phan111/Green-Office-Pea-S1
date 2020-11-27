<?php
include 'connect.php';
$sql = "UPDATE detail
SET detail_id = 127
WHERE subtopic = 'การจัดประชุม อบรม สัมนา'";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
