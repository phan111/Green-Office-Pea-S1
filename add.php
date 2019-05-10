<?php
include 'connect.php';
$sql = "INSERT INTO keyword (keyword_id, detail_id, subtopic, reply_pc)
VALUES (12, 43, 'ข้อเสนอแนะด้านสิ่งแวดล้อม', 'https://drive.google.com/file/d/1_LIuWsiNOOYe0ogxAi7T-sEKTdL1Hz-O/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}


?>
