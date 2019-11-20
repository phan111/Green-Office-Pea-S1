<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1SU4z085Q5fZZW-seUa4an7H0egmDUfGi/view?usp=sharing'
WHERE detail_id = 1";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1BxW-HUQAqAu0hYeckGtQdYlF6HBLrAL9/view?usp=sharing'
WHERE detail_id = 63";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1aaovfPahpJNWfZNIoZV8UnasEKZ7lV04/view?usp=sharing'
WHERE detail_id = 24";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1Rs2pNY83SXzEGs2d0TXvr49HEDNACgoS/view?usp=sharing'
WHERE detail_id = 64";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1BxW-HUQAqAu0hYeckGtQdYlF6HBLrAL9/view?usp=sharing'
WHERE detail_id = 63";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1HfCuhmW5GVl7Zw6VTYkFtJ3V7MeqkQFn/view?usp=sharing'
WHERE detail_id = 5";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1PSSthz8liTO8tzf4TM28Ls3gz8d_3Rs_/view?usp=sharing'
WHERE detail_id = 6";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/12al9qbpR6C_KPblhwfxsZZGZZJbbxf-m/view?usp=sharing'
WHERE detail_id = 7";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1ZKw61ANVXBLswVYFk3ZaQvrshq6KsLhH/view?usp=sharing'
WHERE detail_id = 26";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1mQ-Wyl53nykQn5jd2joZaaGHzI4aU4gV/view?usp=sharing'
WHERE detail_id = 27";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}



mysqli_close($con);
?>
