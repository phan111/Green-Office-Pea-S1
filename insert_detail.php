<?php
include 'connect.php';
echo '<pre>';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (10, 97, 'แก้วเก็บความร้อน', 'https://drive.google.com/drive/u/1/folders/1jTFi7c2x5yi0n9QY5LlGnc6ZTAqg5FFP')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (1ภ, 98, 'โครงการบ่อบำบัดน้ำเสีย', 'https://drive.google.com/drive/u/1/folders/1jTFi7c2x5yi0n9QY5LlGnc6ZTAqg5FFP')";

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
