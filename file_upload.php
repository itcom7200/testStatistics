<?php

$dir_folder = "upload_file";
/*
echo "<pre>";
print_r($_FILES["file"]["name"]);
echo "</pre>"; */

$randomName = md5(uniqid(mt_rand(), true)).".csv";
echo "randomName => ".$randomName."<br>";


$postName = $_POST['name'];
$filename = $_FILES['file']['tmp_name'];
$destination = "$dir_folder/$randomName";

echo "postName => ".$postName."<br>";
echo "filename => ".$filename."<br>";
echo "destinations => ".$destination."<br>";
echo "result =>";

$result = move_uploaded_file($filename,$destination);
print_r($result);
// echo $_POST['name'];


// $result = checkError($tester);
// echo $result;

// if ($_FILES["file"]["error"] > 0) {
//     echo "Error: " . $_FILES["file"]["error"] . "<br>";
// } else {
//     echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//     echo "Type: " . $_FILES["file"]["type"] . "<br>";
//     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//     echo "Stored in: " . $_FILES["file"]["tmp_name"];
// }

/*
include 'connection.php';

$stmt = $conn->prepare("INSERT INTO filecsv (name, filename) value (:name, :filename)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':filename', $filename);

print_r($stmt);
$stmt->execute();

$conn = null;

header("location: form.html");  */
