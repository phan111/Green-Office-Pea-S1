<?php
include 'connect.php';
$sql = 'DELETE FROM detail WHERE detail_id = 118';
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
?>
