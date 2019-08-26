<?php
include 'connect.php';
echo '<pre>';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 63, 'มาตรการการใช้ห้องประชุม', 'https://drive.google.com/file/d/1JhupWEZ1No4Hqqch2y5y2ijd711tlOHu/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 64, 'มาตรการในการประชุม', 'https://drive.google.com/file/d/1JhupWEZ1No4Hqqch2y5y2ijd711tlOHu/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (10, 65, 'มาตรการพาหะนำเชื้อ', 'https://drive.google.com/file/d/1gPjL2e57-TWO3r94xLwOyMuc0jiahXk0/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
