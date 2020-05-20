<?php
include 'connect.php';
echo '<pre>';


$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (5, 101, 'การทิ้งขยะในพื้นที่อาคาร', 'https://drive.google.com/open?id=1eJiI7q4dQtuukpx-XhmaSd3ywEs1Q-eb')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (5, 102, 'มาตรการควบคุมสัตว์พาหะนำเชื้อ', 'https://drive.google.com/open?id=14VRJbEgETCb7hriS8M91wMuKKPDuQWJR')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
