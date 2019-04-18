<?php
include 'connect.php';
echo $_GET['tbl'];
echo '<pre>';
$result = $db->query("SELECT * FROM ".$_GET['tbl']);
if($result->num_rows>0){
    while ($row = $result->fetch_object()) {
        foreach ($row as $r){
            echo $r.'<br>';
        }
    }
}
/*$sql = "SELECT * FROM ".$_GET['tbl'];
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
print_r($row);
foreach($row as $key){
  print_r($key);
}*/
echo '</pre>';
?>
