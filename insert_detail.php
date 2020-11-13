<?php
include 'connect.php';
echo '<pre>';


$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 109, 'มาตรการรณรงค์ไม่สูบบุหรี่', 'https://drive.google.com/file/d/1UKtfhmn44-g8XGJLjxD3cU5hM9Tlywso/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 110, 'มาตรการในการประหยัดพลังงาน', 'https://drive.google.com/file/d/1Ii92aN7tIhRVCpoVPnMpArUYyfSlpaI6/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 112, 'มาตรการในการประหยัดน้ำ', 'https://drive.google.com/file/d/1z0EllNM0gpbog2LFZhH_cedWutGR-dZm/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 113, 'มาตรการในการประหยัดทรัพยากร', 'https://drive.google.com/file/d/1i82Tu03QyFdN41R38IR6et3HdM0f7ImQ/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 114, 'มาตรการในการประหยัดไฟฟ้า', 'https://drive.google.com/file/d/1i82Tu03QyFdN41R38IR6et3HdM0f7ImQ/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 115, 'มาตรการในการประหยัดน้ำมันเชื้อเพลิง', 'https://drive.google.com/file/d/1VQTo1LbamtxTI5ve4A6QTkY5fY_LX0N6/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
