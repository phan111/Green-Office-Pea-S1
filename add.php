<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (10, 58, 'ไม้ประดับดูดสารพิษ', 'https://drive.google.com/file/d/11izhwZcrbFIxccdpMYM6CAGaJ7cA0-Oh/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 59, 'แผนผังทางหนีไฟ', 'https://drive.google.com/file/d/1Yi3bHZCYoUTX9xaK3jiK_QGTHtxAhoa1/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
