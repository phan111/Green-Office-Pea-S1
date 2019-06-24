<?php
include 'connect.php';
$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc 
	FROM keyword k
	INNER JOIN detail d
	ON k.keyword_id = d.keyword_id
	WHERE keyword LIKE '%{$_GET['key']}%'
";
$resource = $con->query($sql);
$rows = $resource->fetch_assoc();
while ($rows) {
	echo '<a href="'.$rows['reply_pc'].'">'.$rows['subtopic'].'</a><br>';
}
?>
