<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1yXywnyCIJBp5mvZpRGvWLkp_sn0u6CNs/view?usp=sharing'
WHERE detail_id = 22";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1-WYv1x-MOJK4IGF0LIz8zs6bjvHIk3LY/view?usp=sharing'
WHERE detail_id = 23";
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
SET reply_pc = 'https://drive.google.com/file/d/1bz3LFghiUHNoq_KFCdSl67f2AqIwChIX/view?usp=sharing'
WHERE detail_id = 25";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1HnOxlL6-N6mKgrxZ_-vYRbyy_dEW0c7Q/view?usp=sharing'
WHERE detail_id = 26";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1w9Ksy3UjCUQ-yQSSKaIDpPjZmB0rj3tY/view?usp=sharing'
WHERE detail_id = 27";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/file/d/1qwL4fx1bSyxmMuUp5Xqeb9VxbG_FUPBb/view?usp=sharing'
WHERE detail_id = 28";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($con);
?>
