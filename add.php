<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 44, 'วิธีการคำนวณ', 'https://drive.google.com/file/d/1gcWpB_JhjLJnU3-Wuo0ogpiBDth8ub4t/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}


?>
