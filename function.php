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

        foreach ($data as $x => $val) {
            echo "'";
            echo $data[$x][0];
            echo "', ";
        }
    }

    public function value($data)
    {
        $myObj = array();

        foreach ($data as $x => $val) {
            echo "'";
            echo $data[$x][1];
            echo "', ";
        }
    }
}

class Table
{

    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function showData()
    {
        echo "<pre>";
        print_r($this->data);
        echo "</pre>";
    }

    // <th scope="col">Jan</th>
    public function headerTable()
    {
        foreach ($this->data as $key => $val) {
            $value = $val[0];

            echo "<th scope='col'>$value</th>";
        }
    }

    public function borrowBook()
    {
        // foreach ($this->data as $key => $val) {
        //     $value = $val[1];

        //     echo "<td>$value</td>";
        // }
        $data = $this->data;

        $i = 0;
        $len = count($data);

        foreach ($data as $item) {

            $value = $item[1];

            if ($i == $len - 1) {
                echo "<td><b>$value</b></td>";
            } else {
                echo "<td>$value</td>";
            }

            $i++;
        }
    }
    public function renewBook()
    {
        // foreach ($this->data as $key => $val) {
        //     $value = $val[2];

        //     echo "<td>$value</td>";
        // }
        $data = $this->data;

        $i = 0;
        $len = count($data);

        foreach ($data as $item) {

            $value = $item[2];

            if ($i == $len - 1) {
                echo "<td><b>$value</b></td>";
            } else {
                echo "<td>$value</td>";
            }

            $i++;
        }
    }

    public function returnBook()
    {
        // foreach ($this->data as $key => $val) {
        //     $value = $val[3];

        //     echo "<td>$value</td>";
        // }
        $data = $this->data;

        $i = 0;
        $len = count($data);

        foreach ($data as $item) {

            $value = $item[3];

            if ($i == $len - 1) {
                echo "<td><b>$value</b></td>";
            } else {
                echo "<td>$value</td>";
            }

            $i++;
        }
    }

    public function totalBook()
    {


        foreach ($this->data as $key => $val) {
            $value = $val[4];

            echo "<td><b>$value</b></td>";
        }
    }

    public function checkLast()
    {
        $data = $this->data;

        $i = 0;
        $len = count($data);

        // echo $len;

        foreach ($data as $item) {

            $value = $item[1];

            if ($i == $len - 1) {
                echo "<td><b>$value</b></td>";
            } else {
                echo "<td>$value</td>";
            }

            $i++;
        }
    }
}
