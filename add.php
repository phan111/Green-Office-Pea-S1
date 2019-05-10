<?php
include 'connect.php';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 35, 'กฎหมายอัคคีภัย', 'https://drive.google.com/file/d/1ESSljQfPQtHrfMOVTYazfJO82eK9xmPK/view?usp=sharing')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

?>
