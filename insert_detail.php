<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 130, 'ตุลาคม 2563', 'https://drive.google.com/file/d/1fLe5dpQz9lfqlADnG1paKU88KwAT3v0v/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
