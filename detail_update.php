<?php
include 'connect.php';
$sql = '
  UPDATE 'detail'
  SET subtopic = "'.$_POST['subtopic'].'",
  reply_pc = "'.$_POST['reply_pc'].'"
  WHERE keyword_id = '.$_POST['id'].'
';
if (mysqli_query($con, $sql)) {
  echo "<script>alert('เสร็จสิ้น');window.location = 'detail.php';</script>";
} else {
  echo "<script>alert('ผิดพลาด กรุณาลองใหม่');window.location = 'detail.php';</script>";
}
mysqli_close($con);
?>
