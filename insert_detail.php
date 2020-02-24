<?php
include 'connect.php';
echo '<pre>';


$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (14, 100, 'ผังและพื้นที่ สนง.กฟต.1', 'https://drive.google.com/open?id=15vpLUDer8_JIiB4ydWZK1dTUh18_c9kd')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
