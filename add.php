<?php
include 'connect.php';
$sql = "INSERT INTO keyword (keyword, topic)
VALUES ('Greenofficeมาตรการพลังงานทรัพยากรกรีน', 'เป้าหมายและมาตรการพลังงาน/ทรัพยากร (ได้แก่ น้ำ ไฟฟ้า น้ำมัน เชื้อเพลิง ก๊าซหุงต้ม กระดาษ และอื่นๆ)')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
