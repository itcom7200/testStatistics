<?php

echo $_GET['id'] . "<br>";
echo $_GET['filetype'] . "<br>"; //bar chart id = 1 & doughnut chart id 11

switch ($_GET['filetype']) {
    case 1:
        $idChartDB = 1;  //bar chart id = 1
        break;
    case 2:
        $idChartDB = 11;  //dough nut chart id = 11
        break;
    case 3:
        $idChartDB = 21; //pie chart
        break;
    case 4:
        $idChartDB = 31; //table 
        break;
}

include "connection.php";

$stmt = $conn->prepare("UPDATE maincsv SET idfilecsv = :id WHERE id = :filetype");
$stmt->bindParam(":id", $_GET['id']);
$stmt->bindParam(":filetype", $idChartDB);

$result = $stmt->execute();
echo $result;

// header กลับไปเพื่อแจ้งเตือน

$id = $_GET['id'];
// $header = "location: record.php?id=$id&alert=true";

if ($idChartDB == 31) {

    $header = "location: table.php?id=$id&alert=true";
} else {

    $header = "location: record.php?id=$id&alert=true";
}

header($header);
