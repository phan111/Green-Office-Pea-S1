    
<?php
include 'connect.php';
echo $_GET['tbl'];
$sql = "SELECT * 
        FROM keyword 
        INNER JOIN detail 
        ON keyword.keyword_id = detail.keyword_id
";
echo '<pre>';
$resource = $con->query($sql);
while ( $rows = $resource->fetch_assoc() ) {
    print_r($rows);//echo "{$row['field']}";
}
$resource->free();
$db->close();
echo '</pre>';
?>
