<?php
echo '<pre>';
print_r($_POST);
echo $sql = '
  UPDATE .$_POST['table'].
  SET topic = .$_POST['topic'].
';
?>
