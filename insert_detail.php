<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 127, 'การจัดประชุม อบรม สัมนา กฟต.1', 'https://drive.google.com/file/d/1xsCyXVTA0Kw5d-IPtuDNW_hKCXeDb4S-/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 128, 'กฎหมายที่เกี่ยวข้อง', 'https://drive.google.com/file/d/16kvnHiwFtUdPMldCXyiST0EXeqR5qlEl/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*$sql = "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (15, 'คณะกรรมการฝ่ายบริหารคณะทีมงาน', 'คณะกรรมการ')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

?>
