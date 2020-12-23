<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 131, 'สรุปผลการใช้ห้องประชุม', 'https://drive.google.com/file/d/1FiVBxI_ZK_CmuKyu-MTUvx4XHJ-WqhEc/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
