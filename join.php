    
<?php
include 'connect.php';
$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply 
        FROM keyword k
        INNER JOIN detail d
        ON k.keyword_id = d.keyword_id
        WHERE keyword LIKE '%Greenofficeนโยบายกรีน%'
";
echo '<pre>';
$resource = $con->query($sql);
$ans = array();
while ( $rows = $resource->fetch_assoc() ) {
    $ans[] = $rows;
    //print_r($rows);//echo "{$row['field']}";
}
echo count($ans);
print_r($ans);
$resource->free();
$db->close();
echo '</pre>';
?>
