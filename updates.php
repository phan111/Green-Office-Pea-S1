<?php
include 'connect.php';
$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1IL4I7Umwy_Z-QzvnFJoTP5GJVGFCXa0G'
WHERE detail_id = 22";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1f2NLUjLkBvLNXLaaabqWPRzwO6q8aWn1'
WHERE detail_id = 23";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1-7Y-jpfPhmiMSq8mLDWN5iEsvjXnNf5G'
WHERE detail_id = 24";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1pd3I6AIB0b7NSPG7-yRkua65NDNGH3og'
WHERE detail_id = 25";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1iXL6HJKbGFHZf2t18bWdZZRTaA9C-P-N'
WHERE detail_id = 26";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1VQCz5eh77bHCpxTgZQAIhgRb-dIUhNXn'
WHERE detail_id = 27";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

$sql = "UPDATE detail
SET reply_pc = 'https://drive.google.com/open?id=1-jqjpVky0sjOHT4qYewViy3CJ4VJjrW6'
WHERE detail_id = 28";
if (mysqli_query($con, $sql)) {
   echo "Record updated successfully<br>";
} else {
   echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>
