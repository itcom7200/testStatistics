<?php
$servername = "us-cdbr-east-02.cleardb.com";
$dbname = "heroku_fc8610eb0615acd";
$username = "b688112fd44812";
$password = "549fc878";

date_default_timezone_set("Asia/Bangkok");

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET time_zone = '+07:00'"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}