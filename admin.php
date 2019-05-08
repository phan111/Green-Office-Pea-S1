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
  <h2 class="text-success">Line : Green Office PEA S1</h2>
  <button type="button" class="btn btn-primary mb-3" data-toggle="collapse" data-target="#demo">Keyword</button>
  <div id="demo" class="collapse">
  <?php
  foreach($keyword as $key){
    echo '<div class="row"><a href="https://green-office-peas1.herokuapp.com/detail.php?id='.$key['keyword_id'].'">'.$key['keyword'].'</a></div>';
  }
  ?>
  </div>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th class="col-1">keyword_id</th>
        <th class="col-1">detail_id</th>
        <th class="col-3">keyword</th>
        <th class="col-2">topic</th>
        <th class="col-3">subtopic</th>
        <th class="col-2">reply</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
    foreach($resource as $key){
    ?>
      <tr>
        <td><?=$key['keyword_id']?></td>
        <td><?=$key['detail_id']?></td>
        <td><?=$key['keyword']?></td>
        <td><?=$key['topic']?></td>
        <td><?=$key['subtopic']?></td>
        <td><?=$key['reply_pc']?></td>
      </tr>
    <?php
    }  
    ?>
    </tbody>
  </table>
  
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
