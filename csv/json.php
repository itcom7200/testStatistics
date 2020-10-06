<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$file = fopen("csv/addresses.csv", "r");

$myObj = array();


while (!feof($file)) {

    $value = (fgetcsv($file));
    
    // if (isset($value)) {
    //     array_push($myObj,$value);
    // }

    if($value != ""){
        array_push($myObj,$value);
    }
    
}

fclose($file);

$myJSON = json_encode($myObj);

echo $myJSON;