<?php

include "connection.php";

class File
{
    public function data($filename)
    {
        $dir = "upload_file/$filename";

        $myObj = array();

        $file = fopen($dir, "r");
        while (!feof($file)) {

            $value = (fgetcsv($file));

            // echo "<pre>";
            // print_r($value);
            // echo "</pre>";

            if ($value != "") {
                // $value[0] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $value[0]); // แก้ \ufeff
                // print_r($value);
                array_push($myObj, $value);
            }
        }
        fclose($file);

        return $myObj;
    }
}

class Chart
{

    public function label($data)
    {
        $myObj = array();

        foreach($data as $x => $val){
            echo "'";
            echo $data[$x][0];
            echo "', ";
        }
    }

    public function value($data){
        $myObj = array();

        foreach($data as $x => $val){
            echo "'";
            echo $data[$x][1];
            echo "', ";
        }
    }

}
