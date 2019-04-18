<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (13, 'โรงแรมสีเขียว', 'line://app/1556091170-BXpwyLjL', 7)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (14, 'ฉลากสินค้า', 'line://app/1556091170-DyZRqdYd', 7)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (15, 'ฉลากเขียว', 'line://app/1556091170-6r4kb0G0', 7)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (16, 'โรงแรมใบไม้เขียว', 'line://app/1556091170-wan4djNj', 7)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
