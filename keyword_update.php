<?php
include 'connect.php';
$sql = '
  UPDATE '.$_POST['table'].'
  SET topic = "'.$_POST['topic'].'",
  keyword = "'.$_POST['keyword'].'"
  WHERE keyword_id = '.$_POST['id'].'
';
if (mysqli_query($con, $sql)) {
  echo "<script>alert('เสร็จสิ้น');window.location = 'keyword.php';</script>";
} else {
  echo "<script>alert('ผิดพลาด กรุณาลองใหม่');window.location = 'keyword.php';</script>";
}
mysqli_close($con);
?>
