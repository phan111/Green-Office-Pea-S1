<?php
include 'connect.php';
echo '<pre>';


$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (14, 99, 'QR Code โครงการบ่อบำบัดน้ำเสีย กฟต.1', 'https://drive.google.com/open?id=1istvCd6P0OwTOCHaiWA8-2kTMRYzah8P')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
