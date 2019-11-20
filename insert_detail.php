<?php
include 'connect.php';
echo '<pre>';
$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (3, 66, 'กฎหมายเกี่ยวกับสำนักงานสีเขียว' 'https://drive.google.com/file/d/1y1IWyhSHZ581Rvblm9Pnjfrpmh3ELEUH/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (5, 67, 'ผังขยะและน้ำเสีย', 'https://drive.google.com/file/d/1upI5LR2ZoT66axNh8goxMyJzCkV2Y6yO/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 67, 'วิธีการคำนวณก๊าซเรือนกระจก', 'https://drive.google.com/file/d/1gcWpB_JhjLJnU3-Wuo0ogpiBDth8ub4t/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 68, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนเมษายน เม.ย.', 'https://drive.google.com/file/d/1CVSy7Y110Fb94u4ewVglzrEbc3zsGWB-/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 69, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนพฤษภาคม พ.ค.', 'https://drive.google.com/file/d/17ZSJuxPMv6yef94H5xcw1KgGjpQ35xYQ/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 70, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนมิถุนายน มิ.ย.', 'https://drive.google.com/file/d/1x7hAULdZDnrGzZ8dFZHmKbNlWDQ4r79H/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 71, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนกรกฎาคม ก.ค.', 'https://drive.google.com/file/d/1I2PXa7IqeMCVHIYyue9KrN8ipW6v_NsM/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 72, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนสิงหาคม ส.ค.', 'https://drive.google.com/file/d/12PM52ofLuRbnqxFMV7i_oRUn29wTw2Ap/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 73, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนกันยายน ก.ย.', 'https://drive.google.com/file/d/1ulSyiBSAre3XYLR7EqkZTva7MMIP3URt/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 74, 'ผลการเกิดก๊าซเรือนกระจกจาก กฟต.1 เดือนตุลาคม ต.ค.', 'https://drive.google.com/file/d/1n75ukLRKAb6Lhor66AClSQmpmdqGWu1u/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 75, 'ผลการใช้ทรัพยากรน้ำ แต่ละเดือน', 'https://drive.google.com/file/d/1Kjf9lC53Nzkv6iDjVE6pspfu_-taLwWj/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 76, 'ผลการใช้พลังงานไฟฟ้า แต่ละเดือน', 'https://drive.google.com/file/d/1bzfLYjBop9p9denoiV-q0DfHpTDsyk3l/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 77, 'ผลการใช้พลังงานเชื้อเพลิง แต่ละเดือน', 'https://drive.google.com/file/d/108DIX1Cp5sSlO-rFLZepARhtTjwsufYY/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 78, 'ผลการใช้กระดาษ แต่ละเดือน', 'https://drive.google.com/file/d/1__Ji6CRkGJvylfoc7giXG5AIY-oqoQGN/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (6, 79, 'ผลการใช้ปริมาณของเสียที่นำกลับมาใช้ใหม่ ในแต่ละเดือน', 'https://drive.google.com/file/d/1zWWNBVVCvz-owqxylcvebZWWFYHmt40h/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO detail (keyword_id, detail_id, subtopic, reply_pc)
VALUES (13, 80, 'ขั้นตอนปฏิบัติเมื่อพบเหตุเพลิงไหม้', 'https://drive.google.com/file/d/1PEJSgQgsayTjbYcFyf3o2tXkAJZfY3C5/view?usp=sharing')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
