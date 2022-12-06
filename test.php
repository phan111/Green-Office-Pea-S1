<?php include 'connect.php' ?>
<html>
  <head></head>
  <body>
      <form action="#" method="get">
        <input type="text" name="word">
        <input type="submit" value="ค้นหา">
      </form>

      <?php
      if(isset($_GET['word']){
        print_r($_GET);
      ?>
  </body>
</html>
