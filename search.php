<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<?php
include 'connect.php';
$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc 
	FROM keyword k
	INNER JOIN detail d
	ON k.keyword_id = d.keyword_id
	WHERE keyword LIKE '%{$_GET['key']}%'
";
$resource = $con->query($sql);
echo '<div class="container mt-1">';
while ($rows = $resource->fetch_assoc()) {
	echo '<div class="row mb-1 d-flex justify-content-center ml-3 mr-3">';
		echo '<a class=" col-12 btn btn-success" href="'.$rows['reply_pc'].'">'.$rows['subtopic'].'</a><br>';
	echo '</div>';
}
echo '</div>';
?>
