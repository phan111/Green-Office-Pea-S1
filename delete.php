<?php
include 'connect.php';
$sql = 'DELETE FROM detail WHERE detail_id > 59';
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
?>