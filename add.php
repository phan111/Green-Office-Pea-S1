<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (17, 'ก๊าซเรือนกระจกตัวการโลกร้อน', 'line://app/1556091170-8AR3jDMD', 8)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (18, 'แหล่งปล่อยก๊าซเรือนกระจก', 'line://app/1556091170-RXg2Vknk', 8)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (19, 'ปรากฎการณ์เรือนกระจก', 'line://app/1556091170-nj7xbywy', 8)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (20, 'โลกร้อนมีผลกระทบอย่างไร', 'line://app/1556091170-PGmJz7y7', 8)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (20, '10 วิธีลดโลกร้อน', 'line://app/1556091170-mZRWD4V4', 8)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>
