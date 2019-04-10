<?php
include 'connect.php';
$sql = "INSERT INTO line_reply (msg, reply)
VALUES ('นโยบาย', 'line://app/1556091170-O9nZo3E3')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
