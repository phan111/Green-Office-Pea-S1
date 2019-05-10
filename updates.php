<?php
include 'connect.php';
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ1นโยบายกรีนสิ่งแวดล้อม'
		WHERE keyword_id = 1;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ2ปัญหาสิ่งแวดล้อมที่มีนัยสำคัญและการจัดการaspectกรีน'
		WHERE keyword_id = 2;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ3กฎหมายกรีนการปฎิบัติตามข้อกำหนดด้านสิ่งแวดล้อมต่างๆที่เกี่ยวข้องใกล้ตัวช่องทางค้นคว้าอัคคีภัยแสงเสียงเขตสูบบุหรี่'
		WHERE keyword_id = 3;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ4เป้าหมายและมาตรการพลังงานทรัพยากรไฟฟ้าน้ำมันเชื้อเพลิงกระดาษน้ำกรีนประหยัดหมึกพิมพ์'
		WHERE keyword_id = 4;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ5ขยะเป้าหมายของเสียมาตรการจัดการของเสียกรีน'
		WHERE keyword_id = 5;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ7สินค้าบริการที่เป็นมิตรกับสิ่งแวดล้อมกรีนฉลากสินค้าโรงแรม'
		WHERE keyword_id = 7;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ8ก๊าซเรือนกระจกกรีนลดโลกร้อน'
		WHERE keyword_id = 8;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ9ทีมงานและอำนาจหน้าที่แต่ละหมวดกรีนคณะกรรมการฝ่ายบริหาร'
		WHERE keyword_id = 9;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ10รณรงค์สิ่งแวดล้อมความสะอาดความเป็นระเบียบบุหรี่กรีนการจัดการ'
		WHERE keyword_id = 10;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ11โลโก้และคำขวัญกรีน'
		WHERE keyword_id = 11;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
$sql = "UPDATE keyword SET 
		keyword = 'Greenofficeข้อ12ข้อเสนอแนะข้อร้องเรียนด้านสิ่งแวดล้อมกรีน'
		WHERE keyword_id = 12;
$query = mysqli_query($con,$sql);
if($query) {
 echo "Record update successfully<br>";
}
?>
