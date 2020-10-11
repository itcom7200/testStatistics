<?php


/*
echo "<pre>";
print_r($_FILES["file"]["name"]);
echo "</pre>"; 
*/

$randomName = md5(uniqid(mt_rand(), true)).".csv";
$tmpFile = $_FILES['file']['tmp_name'];
$destination = "upload_file/$randomName";

move_uploaded_file($tmpFile,$destination);



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


include 'connection.php';

$stmt = $conn->prepare("INSERT INTO filecsv (name, filename) value (:name, :filename)");
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':filename', $randomName);

print_r($stmt);
$stmt->execute();
$last_id = $conn->lastInsertId();

$conn = null;

echo "<br/><br/>";
$header = "location: form.php?insId=".$last_id;
// echo $header;


header($header);
