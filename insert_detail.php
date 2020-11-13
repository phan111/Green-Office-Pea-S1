<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (4, 117, 'การจำแนกประเภทขยะ', 'https://drive.google.com/file/d/1I4LXzP9q2UMBmMVzJ5Ej3lnY9ECVAYO4/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
