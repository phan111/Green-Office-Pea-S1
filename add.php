<?php
include 'connect.php';
$sql = "INSERT INTO keyword (keyword, topic)
VALUES ('Greenofficeขยะของเสียมาตรการจัดการของเสียกรีน', 'เป้าหมายและมาตรการจัดการของเสีย')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
