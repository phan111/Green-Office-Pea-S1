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

?>
