<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (21, '10 วิธีลดโลกร้อน', 'line://app/1556091170-mZRWD4V4', 8)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>
