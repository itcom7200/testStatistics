<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$file = fopen("csv/8bdf91a58ecac1696ff71351b46fa2e2.csv", "r");

$myObj = array();


while (!feof($file)) {

    $value = (fgetcsv($file));
    
    // if (isset($value)) {
    //     array_push($myObj,$value);
    // }

    if($value != ""){
        $value[0] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $value[0]); // แก้ \ufeff
        
        array_push($myObj,$value);
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
    }
    
}

fclose($file);

// echo "<pre>";
// print_r($myObj);
// echo "</pre>";

$myJSON = json_encode($myObj);

echo $myJSON;