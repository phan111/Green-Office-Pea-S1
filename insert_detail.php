<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (14, 129, 'โครงการหลังคาพลังงานแสงอาทิตย์', 'https://drive.google.com/file/d/1jEMrrTmR5-u-KM2_kGqvXx6WLpIlarGx/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
