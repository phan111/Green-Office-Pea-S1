<?php
include 'connect.php';
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (9, 'ขยะทั่วไป', 'line://app/1556091170-mJQ0Xr8r', 5)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (10, 'ขยะย่อยสลาย', 'line://app/1556091170-V9oODRmR', 5)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (11, 'ขยะรีไซเคิล', 'line://app/1556091170-xrJ5zK4K', 5)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "INSERT INTO detail (detail_id, subtopic, reply, keyword_id)
VALUES (12, 'ขยะอันตราย', 'line://app/1556091170-EDlrb141', 5)";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>
