<?php include 'connect.php' ?>
<html>
  <head>
    <style>
      .btn{
        background : #37B21C;
        color : white;
        border-radius : 5px;
        margin-bottom : 10px;
        padding : 10 10 10 10;
      }
      input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #791CB2;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    </style>
  </head>
  <body>
      <form action="#" method="get">
        <input type="text" name="word">
        <input type="submit" value="ค้นหา">
      </form>
      <?php
      if(isset($_GET['word'])){
          $sql = '
            SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc
            FROM keyword k
            INNER JOIN detail d
            ON k.keyword_id = d.keyword_id
            WHERE k.keyword LIKE "%'.$_GET['word'].'%"
          ';
          $resource = $con->query($sql);
          $keyword = 'SELECT keyword, keyword_id FROM keyword';
          $keyword = $con->query($keyword);
          $keyw = 'SELECT * FROM keyword WHERE keyword LIKE "%'.$_GET['word'].'%"';
          $keyw = $con->query($keyw);
          echo '<i align="center">'.$_GET["word"].'</i>';
          foreach($resource AS $key){
          ?>
            <div class="btn" align="center" onclick="javascript:location.href='<?=$key['reply_pc']?>'"><b>
          <?php
            echo $key['subtopic'];
            echo '</b></div>';
          }
      }
      ?>
  </body>
</html>
