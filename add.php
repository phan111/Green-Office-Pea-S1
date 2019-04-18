<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (2, 'นโยบาย กฟภ.', 'line://app/1556091170-jpRVMP6P', 1)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
