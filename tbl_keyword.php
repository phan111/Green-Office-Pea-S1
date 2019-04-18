<?php
include 'conncect.php';
echo 'tbl_keyword';
$sql = "SELECT * FROM keyword";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo '<pre>';
print_r($row);
foreach($row as $key){
  //echo $key->keyword_id.' '.$key->keyword.' '.$key->topic.'<br>';
  print_r($key);
}
?>
