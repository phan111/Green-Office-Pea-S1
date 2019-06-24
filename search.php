<style>
a{
	background:#00cc00;
	height: 150px;
	line-height: 150px;
	border-radius: 5px;
}
</style>
<?php
include 'connect.php';
$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc 
	FROM keyword k
	INNER JOIN detail d
	ON k.keyword_id = d.keyword_id
	WHERE keyword LIKE '%{$_GET['key']}%'
";
$resource = $con->query($sql);
while ($rows = $resource->fetch_assoc()) {
	echo '<a href="'.$rows['reply_pc'].'">'.$rows['subtopic'].'</a><br>';
}
?>
