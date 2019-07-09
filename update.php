<?php
include 'connect.php';
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ1นโยบายกรีนone'
WHERE keyword_id = 1";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ2ปัญหาสิ่งแวดล้อมที่มีนัยสำคัญและการจัดการaspectกรีนtwo'
WHERE keyword_id = 2";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ3กฎหมายกรีนthree'
WHERE keyword_id = 3";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ4เป้าหมายและมาตรการพลังงานทรัพยากรไฟฟ้าน้ำมันเชื้อเพลิงกระดาษน้ำกรีนประหยัดหมึกพิมพ์four'
WHERE keyword_id = 4";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ5ขยะเป้าหมายของเสียมาตรการจัดการของเสียกรีนfive'
WHERE keyword_id = 5";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ6ผลการใช้ทรัพยากร พลังงาน และของเสียกรีนพฤษภาคมพคsix'
WHERE keyword_id = 6";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ7สินค้าบริการที่เป็นมิตรกับสิ่งแวดล้อมกรีนฉลากสินค้าโรงแรมสีเขียวอุปกรณ์seven'
WHERE keyword_id = 7";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ8ก๊าซเรือนกระจกกรีนลดโลกร้อนeight'
WHERE keyword_id = 8";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ9ทีมงานและอำนาจหน้าที่แต่ละหมวดกรีนคณะกรรมการฝ่ายบริหารnine'
WHERE keyword_id = 9";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
$sql = "UPDATE keyword
SET keyword = 'Greenofficeข้อ10รณรงค์สิ่งแวดล้อมความสะอาดความเป็นระเบียบบุหรี่กรีนการจัดการten'
WHERE keyword_id = 10";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($con);
?>
