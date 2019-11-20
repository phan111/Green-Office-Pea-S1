<?php
include 'connect.php';
echo '<pre>';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 66, 'กฎหมายเกี่ยวกับสำนักงานสีเขียว', 'https://drive.google.com/file/d/1y1IWyhSHZ581Rvblm9Pnjfrpmh3ELEUH/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 81, 'วิธีการคำนวณก๊าซเรือนกระจก', 'https://drive.google.com/file/d/1gcWpB_JhjLJnU3-Wuo0ogpiBDth8ub4t/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
