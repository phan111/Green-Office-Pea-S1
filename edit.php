<?php
include 'connect.php';
echo $sql = '
  UPDATE '.$_POST['table'].'
  SET topic = '.$_POST['topic'].',
  keyword = '.$_POST['keyword'].'
  WHERE keyword_id = '.$_POST['id'].'
';
if (mysqli_query($con, $sql)) {
   echo "<script>alert('เสร็จสิ้น');window.location = 'https://green-office-peas1.herokuapp.com/keyword.php';</script>";
} else {
   echo "<script>alert("Error updating record: " . mysqli_error($conn));window.location = 'https://green-office-peas1.herokuapp.com/keyword.php';</script>";
}
mysqli_close($con);
?>
