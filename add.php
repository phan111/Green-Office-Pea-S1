<?php
include 'connect.php';
$sql = "INSERT INTO keyword (keyword, topic)
VALUES ('Greenofficeกฎหมายกรีน', 'การปฎิบัติตามกฎหมายและข้อกำหนดด้านสิ่งแวดล้อมต่างๆที่เกี่ยวข้อง')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
