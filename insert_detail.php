<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 118, 'การจำแนกประเภทขยะ', 'https://drive.google.com/file/d/1coQYbiG2v5Is0IIik-LLAVIQm49gwWxv/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 119, 'มิถุนายน 2563', 'https://drive.google.com/file/d/1coQYbiG2v5Is0IIik-LLAVIQm49gwWxv/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 120, 'กรกฎาคม 2563', 'https://drive.google.com/file/d/1d4utCNFYqTPWR7vl2RiDeLpNZ6asWetu/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 121, 'สิงหาคม 2563', 'https://drive.google.com/file/d/14zM2VZpx9srhk4APGAWLnWGocul4iFqj/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (8, 122, 'กันยายน 2563', 'https://drive.google.com/file/d/1_dviP8PQJ3t-OCbNzCBHKbahRTxNKJWy/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
