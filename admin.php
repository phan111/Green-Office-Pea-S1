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
  <h2>Simple Collapsible</h2>
  <a href="#demo" class="btn btn-primary" data-toggle="collapse">Simple collapsible</a>
  <div id="demo" class="collapse">
  <?php
    echo '<pre>';
    foreach($resource as $key){
      echo '<form action="#">';
      
        echo '<div class="row">';
          echo '</div class="col-2"><label>keyword_id</label></div>';
          echo '<div class="col-10"><input class="form-control" value="'.$key->keyword_id.'"></div>';
        echo '</div>';
      
        echo '<div class="row">';
          echo '</div class="col-2"><label>keyword</label></div>';
          echo '<div class="col-10"><input class="form-control" value="'.$key->keyword.'"></div>';
        echo '</div>';
      
      echo '</form>';
    }
    $resource->free();
    $db->close();
    echo '</pre>';
  ?>
  </div>
</div>

</body>
</html>
