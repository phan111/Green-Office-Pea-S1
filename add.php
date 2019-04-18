<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (28, 'โลโก้และคำขวัญ', 'line://app/1556091170-opYG08v8', 11)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
