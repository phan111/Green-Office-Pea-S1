<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (7, 45, 'อุปกรณ์สำนักงาน 9 รายการ (1)', 'https://drive.google.com/file/d/14OBJoQUgk9xHwUmGRbDSYMlbtSJh1-Lc/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (7, 46, 'อุปกรณ์สำนักงาน 9 รายการ (2)', 'https://drive.google.com/file/d/18QtJ6-bsDABagpvb7gr-yoHoiijasqAq/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (7, 47, 'อุปกรณ์สำนักงาน 9 รายการ (3)', 'https://drive.google.com/file/d/1I01fRt7cHvzHHxJI4QOwOGWjJOQmnCXz/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}



?>
