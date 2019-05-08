<?php
  include 'connect.php';
  $detail = 'SELECT subtopic FROM detail WHERE keyword_id = '.$_GET['id'].'';
  $detail = $con->query($detail);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Line | Green Office PEA S1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3 class="text-success">หัวข้อย่อย Keyword: '.$_GET['key'].'</h3>
<?php
foreach($detail as $det){
  echo '<div class="row">'.$det['subtopic'].'</div>
}
?>
</div>

</body>
</html>
