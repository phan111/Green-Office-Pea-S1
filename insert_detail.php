<?php
include 'connect.php';
echo '<pre>';
/*$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 66, 'กฎหมายเกี่ยวกับสำนักงานสีเขียว', 'https://drive.google.com/file/d/1y1IWyhSHZ581Rvblm9Pnjfrpmh3ELEUH/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/


$sql = "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (14, 'Greenofficeโครงการบริหารจัดการน้ำเสียภายในพื้นที่สำนักงาน กฟต.1.', 'โครงการบริหารจัดการน้ำเสียภายในพื้นที่สำนักงาน กฟต.1.')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
