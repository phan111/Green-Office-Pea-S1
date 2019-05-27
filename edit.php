<?php
include 'connect.php';
$sql = 'UPDATE '".$_POST['table']."'
        SET keyword = '".$_POST['keyword']."',
        topic = '".$_POST['topic']."'
        WHERE keyword_id = '".$_POST['id']."'';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
