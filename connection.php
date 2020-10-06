<?php
$servername = "us-cdbr-east-02.cleardb.com";
$dbname = "heroku_fc8610eb0615acd";
$username = "b688112fd44812";
$password = "549fc878";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// $stmt = $conn->query("SELECT * FROM student");
// // $stmt->execute();

// $result = $stmt->fetchAll();
// echo "<PRE>";
// print_r($result);
// echo "</PRE>";





