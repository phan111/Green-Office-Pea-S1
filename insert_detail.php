<?php
include 'connect.php';
echo '<pre>';

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (15, 124, 'คณะกรรมการฝ่ายบริหาร', 'https://drive.google.com/file/d/1IgiLWArgrpqxPTx-H3Qw0aQzL7RmOE9s/view?usp=sharing')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*$sql = "INSERT INTO keyword (keyword_id, keyword, topic)
VALUES (15, 'คณะกรรมการฝ่ายบริหารคณะทีมงาน', 'คณะกรรมการ')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

?>
