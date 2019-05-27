<?php
include 'connect.php';
echo $sql = 'UPDATE '.$_POST['table'].'
        SET keyword = "'.$_POST['keyword'].'",
        topic = "'.$_POST['topic'].'"
        WHERE '.$_POST['table'].'_id = '.$_POST['id'].';
/*if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);*/
?>
