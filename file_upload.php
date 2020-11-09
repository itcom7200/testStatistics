<?php

$chart_type = null;

// echo $_POST['chart']."<br/>";

// if ($_POST['chart'] === "bar") {
//     $chart_type = 1;
// } else {
//     $chart_type = 2;
// }

switch ($_POST['chart']) {
    case "bar":
        $chart_type = 1;
        break;

    case "doughnut":
        $chart_type = 2;
        break;

    case "pie":
        $chart_type = 3;
        break;
    default:
        $chart_type = 4;
}

// echo "chart -> ".$chart_type;

/*
echo "<pre>";
print_r($_FILES["file"]["name"]);
echo "</pre>"; 
*/

$randomName = md5(uniqid(mt_rand(), true)) . ".csv";
$tmpFile = $_FILES['file']['tmp_name'];
$destination = "upload_file/$randomName";

move_uploaded_file($tmpFile, $destination);


include 'connection.php';

$stmt = $conn->prepare("INSERT INTO filecsv (name, filename, type) value (:name, :filename, :type)");
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':filename', $randomName);
$stmt->bindParam(':type', $chart_type);

print_r($stmt);
$stmt->execute();
$last_id = $conn->lastInsertId();

$conn = null;

echo "<br/><br/>";
$header = "location: form.php?insId=" . $last_id;

// echo $header;


header($header);
