<?php
include 'connect.php';
echo '<pre>';
print_r($_GET);
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES ($_GET['keyword_id'], $_GET['detail_id'], $_GET['subtopic'], $_GET['reply_pc'])";

/*if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

?>
