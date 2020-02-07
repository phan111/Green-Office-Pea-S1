<?php
include 'connect.php';
echo '<pre>';


$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (14, 98, 'รณรงค์การลดขยะ', 'https://drive.google.com/open?id=1BZZLs3SoS_VyfQ6l1iHB6UcGNdE3GkOR')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
