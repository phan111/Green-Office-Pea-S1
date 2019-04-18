<?php
include 'conncect.php';
$sql = "SELECT * FROM keyword";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo '<pre>';
foreach($row as $key){
  //echo $key->keyword_id.' '.$key->keyword.' '.$key->topic.'<br>';
  print_r($key);
}
?>
