<?php

if (empty($_GET['id'])) {
    header('location: admin.php');
}

include 'connection.php';

echo $_GET['id'] . "<br>";

// $stmt = $conn->prepare('DELETE from filecsv where id = :id');
// $stmt->bindParam(':id', $_GET['id']);
// $result = $stmt->execute();
// echo "result query = " . $result;


// echo $_GET['filepath']."<br>";

$delete = "upload_file/".$_GET['filepath'];
echo $delete."<br>"; 

// สั่งลบไฟล์พาร์ท & ลบ id ตามที่ส่ง GET มา


if(!unlink($delete)){
echo "ไม่สามารถลบไฟล์ $delete ได้<br>";

} else {
echo "<br> $delete ได้ลบแล้ว";
$stmt = $conn->prepare('DELETE from filecsv where id = :id');
$stmt->bindParam(':id', $_GET['id']);
$result = $stmt->execute();
echo "result query = ".$result;
}


//ลบไฟล์ได้แล้ว

// @unlink($delete);

// include 'connection.php';

// $stmt = $conn->prepare('SELECT * FROM filecsv WHERE id = :id');
// $stmt->bindParam(':id', $_GET['id']);
// $stmt->execute();
// $result = $stmt->fetchAll();
// echo "<pre>";
// print_r($result);
// echo "</pre>";
