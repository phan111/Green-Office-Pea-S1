<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 85, 'ผลการเกิดก๊าซเรือนกระจก พ.ย.', 'https://drive.google.com/open?id=1EcOjRlEFKm0KbgjoNg_tMlRVqOBwZ4x2')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 61, 'ผลเดือนพฤษภาคม พ.ค.', 'https://drive.google.com/open?id=1zoamebN3p9dYgEivdfmoeLXvtmUGGvaZ')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
