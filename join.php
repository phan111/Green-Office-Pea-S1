    
<?php
include 'connect.php';
$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply 
        FROM keyword k
        INNER JOIN detail d
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
