<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (10, 41, 'รณรงค์เลิกสูบบุหรี่ 1', 'https://drive.google.com/file/d/1KVLSyE-xWScZR-ftmjh6y4LLWAw5yP7N/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 42, 'รณรงค์เลิกสูบบุหรี่ 2', 'https://drive.google.com/file/d/13cPdJKwiS-RN0Sh1iDcXODfzWjeWngOj/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
