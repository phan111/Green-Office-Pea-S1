<?php
  include 'connect.php';
  $sql = '
    SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply, d.reply_pc
    FROM keyword k
    INNER JOIN detail d
    ON k.keyword_id = d.keyword_id;
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
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>keyword_id</th>
        <th>detail_id</th>
        <th>keyword</th>
        <th>topic</th>
        <th>subtopic</th>
        <th>reply</th>
        <th>reply_pc</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
    $ = 0;
    foreach($resource as $key){
    ?>
      <tr data-toggle="modal" data-target="#myModal<?=$i?>">
        <td><?=$key['keyword_id']?></td>
        <td><?=$key['detail_id']?></td>
        <td><?=$key['keyword']?></td>
        <td><?=$key['topic']?></td>
        <td><?=$key['subtopic']?></td>
        <td><?=$key['reply']?></td>
        <td><?=$key['reply_pc']?></td>
      </tr>
      
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"><?=$i?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    <?php
      $i++;
    }  
    ?>
    </tbody>
  </table>
  
</div>
 
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
