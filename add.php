<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, keyword, topic)
VALUES (8, 'Greenofficeก๊าซเรือนกระจกกรีน', 'ก๊าซเรือนกระจก')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
