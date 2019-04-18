<?php
include 'connect.php';
$sql = "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (5, 'Greenofficeขยะของเสียมาตรการจัดการของเสียกรีน', 'เป้าหมายและมาตรการจัดการของเสีย')";
$sql .= "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (6, '', 'ผลการใช้ทรัพยากร พลังงาน และของเสีย')";
$sql .= "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (7, 'Greenofficeสินค้าบริการที่เป็นมิตรกับสิ่งแวดล้อมกรีน', 'สินค้าและบริการที่เป็นมิตรกับสิ่งแวดล้อม')";
$sql .= "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (8, 'Greenofficeก๊าซเรือนกระจกกรีน', 'ก๊าซเรือนกระจก')";
$sql .= "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (9, 'Greenofficeทีมงานและอำนาจหน้าที่แต่ละหมวดกรีน', 'ทีมงานด้านสิ่งแวดล้อม และอำนาจหน้าที่')";
$sql .= "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (10, '', 'การรณรงค์ในการจัดการสิ่งแวดล้อมอื่นๆ เช่น ความสะอาดและความเป็นระเบียบ เป็นต้น')";
$sql .= "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (11, 'Greenofficeโลโก้และคำขวัญกรีน', 'โลโก้และคำขวัญ')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
