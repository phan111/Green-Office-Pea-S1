<?php
include 'connect.php';
echo $_GET['tbl'];
$sql = "SELECT * FROM ".$_GET['tbl'];
echo '<pre>';
$resource = $con->query($sql);
while ( $rows = $resource->fetch_assoc() ) {
    print_r($rows);//echo "{$row['field']}";
}
$resource->free();
$db->close();
/*$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
print_r($row);
foreach($row as $key){
  print_r($key);
}*/
echo '</pre>';
?>
