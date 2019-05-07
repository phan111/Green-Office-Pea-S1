<?php
  include 'connect.php';
  $sql = '
    SELECT k.keyword_id, k.keyword, d.detail_id, d.subtopic, d.reply, d.reply_pc
    FROM keyword k
    INNER JOIN detail d
    ON k.keyword_id = d.keyword_id;
  ';
  $resource = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<?php
    foreach($resource as $key){
   ?>
      
       
          </div class="col-4">
            <label>keyword_id</label>
          </div>
          <div class="col-8">
            <input class="form-control" value="<?=$key['keyword_id']?>">
          </div>
      
          </div class="col-4">
            <label>keyword</label>
          </div>
          <div class="col-8">
            <input class="form-control" value="<?=$key['keyword']?>">
          </div>
       
      
  <?php
    }
    $resource->free();
    $db->close();
  ?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3> 
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>

</body>
</html>
