<?php

$name = $_GET['name'];
$filename = $_GET['filename'];

include 'connection.php';

$stmt = $conn->prepare("INSERT INTO filecsv (name, filename) value (:name, :filename)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':filename', $filename);

print_r($stmt);
$stmt->execute();

$conn = null;

header("location: form.html");