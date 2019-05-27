<?php
echo $sql = 'UPDATE '.$_POST['table'].'
        SET keyword = "'.$_POST['keyword'].'",
        topic = "'.$_POST['topic'].'"
        WHERE '.$_POST['table'].'_id = '.$_POST['id'].';

?>
