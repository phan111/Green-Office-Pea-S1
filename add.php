<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 34, 'ช่องทางค้นคว้า', 'https://drive.google.com/file/d/17t1BVHZUd4EHe2n6xhPn8mV7L4jYovHV/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
