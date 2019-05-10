<?php
include 'connect.php';
$sql = "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (12, 'Greenofficeข้อเสนอแนะข้อร้องเรียนด้านสิ่งแวดล้อมกรีน', 'ข้อเสนอแนะด้านสิ่งแวดล้อม')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}


?>
