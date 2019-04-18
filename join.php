    
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
if($resource){
    echo 'yes';
}else{
    echo 'no';
}
while ( $rows = $resource->fetch_assoc() ) {
    print_r($rows);//echo "{$row['field']}";
}
$resource->free();
$db->close();
echo '</pre>';
?>
