<?php
include 'connect.php';
echo $sql = '
  UPDATE '.$_POST['table'].'
  SET topic = "'.$_POST['topic'].'",
  keyword = "'.$_POST['keyword'].'"
  WHERE keyword_id = '.$_POST['id'].'
';
if (mysqli_query($con, $sql)) {
  echo 'yes';
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
