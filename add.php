<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 36, 'กฎหมายแสง เสียง', 'https://drive.google.com/file/d/1hOWcI5us9wTfLcoA-SoqgsEXMYZfrW6R/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 37, 'กฏหมายเขตสูบบุหรี่', 'https://drive.google.com/file/d/1aWB7pDs4ZBwlYcO7vyV0aauB2LgY128_/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
