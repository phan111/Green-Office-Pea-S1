<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 103, 'การคำนวนก๊าซเือนกระจก', 'https://drive.google.com/file/d/1LvuiUFkREyJnU_BiN7dvyBQNUhLpKchi/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
