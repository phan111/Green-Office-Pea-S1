<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (22, 'คณะกรรมการฝ่ายบริหาร', 'line://app/1556091170-01BlEQLQ', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (23, 'หมวด 1', 'line://app/1556091170-wp1aGQNQ', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (24, 'หมวด 2', 'line://app/1556091170-7vlAYwXw', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (25, 'หมวด 3', 'line://app/1556091170-AVNPZJzJ', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (26, 'หมวด 4', 'line://app/1556091170-jXq4w2m2', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (27, 'หมวด 5', 'line://app/1556091170-NLWJKpnp', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (28, 'หมวด 6', 'line://app/1556091170-zoGRQlPl', 9)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
