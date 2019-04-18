<?php
include 'connect.php';
echo $_GET['tbl'];
$sql = "SELECT * FROM '".$_GET['tbl']."'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo '<pre>';
print_r($row);
foreach($row as $key){
  //echo $key->keyword_id.' '.$key->keyword.' '.$key->topic.'<br>';
  print_r($key);
}
echo '</pre>';
?>
