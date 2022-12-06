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
        if ($con -> connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }

        $sql = "SELECT * FROM keyword";

        if ($result = $mysqli -> query($sql)) {
          while ($row = $result -> fetch_row()) {
            printf ("%s (%s)\n", $row[0], $row[1]);
          }
          $result -> free_result();
        }

        $mysqli -> close();
        print_r($_GET);
      }
      ?>
  </body>
</html>
