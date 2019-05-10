<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 38, 'รณรงค์ด้านไฟฟ้าปิดปรับปลดเปลี่ยน', 'https://drive.google.com/file/d/1CTYofkG2RTvdWx4clpYTuNmsUpLjfW_U/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 39, 'รณรงค์ด้านไฟฟ้าประหยัดไฟง่ายๆ', 'https://drive.google.com/file/d/1w06BFFKbM1CaVIuvZEUYAc3lUhtf6r2d/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 40, 'รณรงค์ด้านน้ำปิดก๊อกให้สนิท', 'https://drive.google.com/file/d/1z_F-6k-e-qdDgTSWke-ynfIgUmiTjd6a/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
