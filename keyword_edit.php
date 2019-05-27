<?php
  include 'connect.php';
  $sql = '
    SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc
    FROM keyword k
    INNER JOIN detail d
    ON k.keyword_id = d.keyword_id
  ';
  $resource = $con->query($sql);
  $keyword = 'SELECT keyword, keyword_id FROM keyword';
  $keyword = $con->query($keyword);
  $keyw = 'SELECT * FROM keyword WHERE keyword_id = '.$_GET['id'].'';
  $keyw = $con->query($keyw);
  $keyw = mysqli_fetch_assoc($keyw);
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

<div class="container mt-3">
  <h2 class="text-success">Line : Green Office PEA S1</h2>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="https://green-office-peas1.herokuapp.com/admin.php">หน้าแรก</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#demo">Keyword</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="https://green-office-peas1.herokuapp.com/keyword.php">แก้ไข Keyword</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="https://green-office-peas1.herokuapp.com/detail.php">แก้ไขรายละเอียด</a>
  </li>
</ul>
  <div id="demo" class="col-12 collapse">
  <?php
  foreach($keyword as $key){
    echo '<div class="row"><a href="https://green-office-peas1.herokuapp.com/detail.php?id='.$key['keyword_id'].'&key='.$key['keyword'].'">'.$key['keyword'].'</a></div>';
  }
  ?>
  </div>
  <div class="row">
  <?php print_r($keyw); ?>
    <div class="col-2">Keyword</div>
    <div class="col-10"><input class="form-control" name="keyword" value=""></div>
  </div>
  
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
