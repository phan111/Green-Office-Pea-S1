<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 56, 'แผนผังขั้นตอนการปฏิบัติเมื่อเกิดเพลิงไหม้', 'https://drive.google.com/file/d/1YJv3Mb62MsHw6p7fDUC4H8XWG7q07Y0r/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 57, 'วิธีการใช้ถังดับเพลิง', 'https://drive.google.com/file/d/1FM3X-Q0d58VsX1B_JICr9181tHu23uJL/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
