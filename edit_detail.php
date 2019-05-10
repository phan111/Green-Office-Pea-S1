<?php
  include 'connect.php';
  $sql = '
    SELECT *
    FROM detail
  ';
  $resource = $con->query($sql);
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
    echo '<div class="row"><a href="https://green-office-peas1.herokuapp.com/detail.php?id='.$key['keyword_id'].'&key='.$key['keyword'].'">'.$key['keyword'].'</a></div>';
  }
  ?>
  </div>
  <form action="insert_detail">
    <div class="row">
      <div class="col-6">keyword_id</div>
      <div class="col-6"><input type="text" class="form-control" name="keyword_id"></div>
      <div class="col-6">detail_id</div>
      <div class="col-6"><input type="text" class="form-control" name="detail_id"></div>
      <div class="col-6">subtopic</div>
      <div class="col-6"><input type="text" class="form-control" name="subtopic"></div>
      <div class="col-6">reply_pc</div>
      <div class="col-6"><input type="text" class="form-control" name="reply_pc"></div>
    </div>
  </form>
  <br>
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th class="col-1">keyword_id</th>
        <th class="col-1">detail_id</th>
        <th class="col-3">subtopic</th>
        <th class="col-2">reply_pc</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
    foreach($resource as $key){
    ?>
    <form action="update_detail" method="post">
      <tr>
        <td><input class="form-control" name="keyword_id" value="<?=$key['keyword_id']?>"></td>
        <td><input class="form-control" name="detail_id" value="<?=$key['detail_id']?>"></td>
        <td><input class="form-control" name="subtopic" value="<?=$key['subtopic']?>"></td>
        <td><input class="form-control" name="reply_pc" value="<?=$key['reply_pc']?>"></td>
        <td><input type="submit" class="btn btn-success" value="แก้ไข"></td>
      </tr>
     </form>
    <?php
    }  
    ?>
    </tbody>
  </table>
  
</div>

</body>
</html>
