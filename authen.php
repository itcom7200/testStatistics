<?php

session_start();

if(empty($_POST['username'])){
    header('Location: login.html');
}


$username = $_POST['username'];
$password = $_POST['password'];

if ($username === "admin" && $password === "admin") {
    // echo "Hello world!"; // start session
    $_SESSION['user'] = "admin";
    header('location: admin.php');
}
//else echo "faild"; //header location login.html
else header('location: login.html');