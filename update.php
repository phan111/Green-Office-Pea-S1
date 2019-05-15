<?php
include 'connect.php';
$sql = 'UPDATE detail
        SET reply_pc = "https://drive.google.com/file/d/1DU2uTm28CI6c9vS43RZXOLO3b6pq0RbE/view?usp=sharing"
        WHERE detail_id = 17';
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
