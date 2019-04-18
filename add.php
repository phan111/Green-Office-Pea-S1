<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (3, 'มาตรการด้านกระดาษหมึกพิมพ์ 1', 'line://app/1556091170-Nm0ADPBP', 4)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (4, 'มาตรการด้านกระดาษหมึกพิมพ์ 2', 'line://app/1556091170-pGvqOgAg', 4)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (5, 'มาตรการด้านน้ำ น้ำมันเชื้อเพลิง', 'line://app/1556091170-ZMw07yEy', 4)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (6, 'มาตรการด้านไฟฟ้า 1', 'line://app/1556091170-e2ODBl2l', 4)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (7, 'มาตรการด้านไฟฟ้า 2', 'line://app/1556091170-QWA54gkg', 4)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (8, 'มาตรการด้านไฟฟ้า 3', 'line://app/1556091170-WakZ9KzK', 4)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
