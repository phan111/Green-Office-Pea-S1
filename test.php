<?php include 'connect.php' ?>
<html>
  <head></head>
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
          ';
          $resource = $con->query($sql);
          $keyword = 'SELECT keyword, keyword_id FROM keyword';
          $keyword = $con->query($keyword);
          $keyw = 'SELECT * FROM keyword';
          $keyw = $con->query($keyw);
          foreach($keyw AS $key){
            print_r($key);
          }
        print_r($_GET);
      }
      ?>
  </body>
</html>
