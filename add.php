<?php
include 'connect.php';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 104, 'มกราคม 2563', 'https://drive.google.com/file/d/1HqkEtbNdS0gNMunKCONfoLv98sXR3qdB/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 105, 'กุมภาพันธ์ 2563', 'https://drive.google.com/file/d/1gFZMBfiyyS76g2pWu5eyXUBw-nXDXkv-/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 106, 'มีนาคม 2563', 'https://drive.google.com/file/d/1c25hJc4DZhrDHKSj3gXaRTbfitVjWAVk/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 107, 'เมษายน 2563', 'https://drive.google.com/file/d/1Ypr1RPCa-THWsVzYTFCGWkczdxYWM9r7/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 108, 'พฤษภาคม 2563', 'https://drive.google.com/file/d/1e_xUS52giLiM0lNs00Bgn-_VFNXLOyy0/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
