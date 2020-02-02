<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 86, 'ผลการเกิดก๊าซเรือนกระจก ธ.ค.', 'https://drive.google.com/open?id=1zoamebN3p9dYgEivdfmoeLXvtmUGGvaZ')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
