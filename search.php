<?php
include 'connect.php';
$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc 
	FROM keyword k
	INNER JOIN detail d
	ON k.keyword_id = d.keyword_id
	WHERE keyword LIKE '%{$_GET['key']}%'
";
$resource = $con->query($sql);
$ans = array();
while ( $rows = $resource->fetch_assoc() ) {
    $ans[] = $rows;
    print_r($rows);
	echo '<a href="'.$rows['reply_pc'].'">'.$rows['topic'].'</a>';
}
?>
