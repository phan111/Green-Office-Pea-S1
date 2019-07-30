<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 60, 'ผลการใช้ทรัพยากร พลังงาน และของเสีย เดือนเมษายน เม.ย.', 'https://drive.google.com/file/d/1DW-NeXH3dtxrOjvXjWVA9nP6zplXquMy/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 61, 'ผลการใช้ทรัพยากร พลังงาน และของเสีย เดือนพฤษภาคม พ.ค.', 'https://drive.google.com/file/d/1Ij00nZ7q9gtFVU1dJOXkKIvOYZwH9ImT/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 62, 'ผลการใช้ทรัพยากร พลังงาน และของเสีย เดือนมิถุนายน มิ.ย.', 'https://drive.google.com/file/d/1lFpYzcXNTor09g_EXCizlhQRRZXd4K23/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
