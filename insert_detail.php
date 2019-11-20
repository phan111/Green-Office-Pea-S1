<?php
include 'connect.php';
echo '<pre>';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 82, 'ขออนุมัติ โครงการบริหารจัดการน้ำเสีย', 'https://drive.google.com/file/d/1Vf3gz6i40830xjCCjyIg35Wk_5JJ_EJj/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 83, 'โครงการบริหารจัดการน้ำเสียภายในพื้นที่', 'https://drive.google.com/file/d/1DXZBbiVTcOjklKqyHg_ojUOvk-lhTHBw/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 84, 'สรุปผลโครงการบริหารจัดการน้ำเสียภายในพื้นที่', 'https://drive.google.com/file/d/1p9-SnW2dCgyuLybnGVgTTmBmjpy37YXG/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


/*$sql = "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (14, 'Greenofficeโครงการบริหารจัดการน้ำเสียภายในพื้นที่สำนักงาน กฟต.1.', 'โครงการบริหารจัดการน้ำเสียภายในพื้นที่สำนักงาน กฟต.1.')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

?>
