<?php

session_start();

if (empty($_GET['alert'])) {
    $_GET['alert'] = "false";
}

include "connection.php";

$stmt = $conn->prepare('SELECT * FROM filecsv where id = :id');
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();
$result = $stmt->fetchAll();

$alert = null;

if ($_GET['alert'] === "true") {
    $alert = $result[0]["name"];
}

$template_Alert = '<div class="alert alert-success" role="alert">' . $alert . ' ใช้เป็นไฟล์หลักแล้ว</div>';

$filePath = $result[0]['filename'];
$dir = "upload_file/$filePath";
// echo $dir;

$myObj = array(); // array for push value of fileCSV;

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

// echo $result[0]["type"];

$chartType =  $result[0]["type"];
$idFile = $result[0]["id"];
// echo $idFile."<br>";

switch ($chartType) {
    case 1: // bar
        $typeChart = "'bar'";
        $backgroundChart = 'backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 99, 132, 0.2)"
            
        ],
        borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(255, 99, 132, 1)"
            
        ]';
        break;
    case 2: //2 doughnut
        $typeChart = "'doughnut'";
        $backgroundChart = 'backgroundColor: [
            "#8adfe2",
            "#55c5d1",
            "#4699c3",
            "#ffd57e",
            "#f79c65"
        ]';
        break;
    case 3: //pie chart
        $typeChart = "'pie'";
        $backgroundChart = 'backgroundColor: [
                "#8adfe2",
                "#55c5d1",
                "#4699c3",
                "#ffd57e",
                "#f79c65"
            ]';
        break;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="admin.php">Admin Module </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Form</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            View Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="barchart.php">Bar Chart</a>
                            <a class="dropdown-item" href="dnchart.php">Dough-nut</a>
                            <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <span id="userSpan" class="navbar-text px-5 text-success">
                        <?php echo $_SESSION['user']; ?>
                    </span>
                    <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Log Out</a>
                    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->


                    <!-- <a id="logOut" class="btn btn-danger my-2 my-sm-0" href="login.html">Log Out</a>  -->
                    <!-- btn-outline-success -->
                </form>
                <!-- <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Log out</a>
                  </li>
              </ul> -->

            </div>
        </nav>
    </div>

    <div class="container pt-4">
        <div class="row shadow p-3 bg-white rounded">

            <div class="col-md-12">
                <?php

                if ($_GET['alert'] === "true") {
                    echo $template_Alert;
                }
                
                ?>

            </div>

            <div id="chart" class="col-md">



                <div class="text-center">
                    <h2>Example</h2>
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                    
                    <ul>
                        <li><?php echo $result[0]['note']; ?></li>
                    </ul>
                </div>

            </div>
            <div id="info" class="col-md mx-4">
                <div class="text-center mb-4">
                    <h2>Infomations</h2>
                </div>

                <div class="info">
                    <div class="row">
                        <div class="col-12 col-md-6 my-2">
                            <?php
                            echo '<a class="btn btn-primary btn-block active"
                                    href="maincsv.php?id=' . $idFile . '&filetype=' . $chartType . '"> <!-- disabled="disabled" -->
                                    <i class="fa fa-check fa-lg" aria-hidden="true"></i>
                                        Active
                                    </a>';
                            ?>
                        </div>
                        <div class="col-12 col-md-6 my-2">
                            <button class="btn btn-danger btn-block">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Delete
                            </button>
                        </div>
                    </div>
                </div>

                <div class="test">
                    <?php
                    // echo "id = " . $_GET['id'] . "<br>";
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";

                    // $date = strtotime($result[0]['time']);

                    // echo date("d/m/Y h:i:sa", $date);

                    ?>
                </div>

                <ul class="mt-2 p-0">
                    <?php
                    $date = strtotime($result[0]['time']);
                    ?>
                    <li>
                        <h6>ชื่อไฟล์ : <?php echo $result[0]['name']; ?></h6>
                    </li>
                    <li>
                        <h6>อัพโหลด : <?php echo date("d/m/Y ", $date); ?></h6>
                    </li>
                    <li>
                        <h6>เวลา : <?php echo date("h: i: s a ", $date); ?></h6>
                    </li>

                </ul>
            </div> <!-- .metadata -->
        </div>

    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-md jumbotron">
                <pre>
                    <?php //print_r($myObj); 

                    ?>
                </pre>
            </div>
        </div>
    </div> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- bootstrap4 cdn -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- chart js cdn -->
    <script src="chartjs-plugin-labels.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: <?php
                    echo $typeChart;
                    ?>,
            data: {
                labels: [
                    <?php
                    foreach ($myObj as $key => $value) {
                        print_r('"' . $myObj[$key][0] . '"');
                        echo ",";
                    }
                    ?>
                ],
                datasets: [{
                    // label: '# of Votes',
                    data: [
                        <?php
                        foreach ($myObj as $key => $value) {
                            print_r('"' . $myObj[$key][1] . '"');
                            echo ",";
                        }
                        ?>
                    ],
                    // backgroundColor: [
                    //     "rgba(255, 99, 132, 0.2)",
                    //     "rgba(255, 99, 132, 0.2)",
                    //     "rgba(255, 99, 132, 0.2)",
                    //     "rgba(255, 99, 132, 0.2)",
                    //     "rgba(255, 99, 132, 0.2)",
                    //     "rgba(255, 99, 132, 0.2)"

                    // ],
                    // borderColor: [
                    //     "rgba(255, 99, 132, 1)",
                    //     "rgba(255, 99, 132, 1)",
                    //     "rgba(255, 99, 132, 1)",
                    //     "rgba(255, 99, 132, 1)",
                    //     "rgba(255, 99, 132, 1)",
                    //     "rgba(255, 99, 132, 1)"

                    // ]
                    <?php
                    echo $backgroundChart;
                    ?>,
                    borderWidth: 1
                }]
            },
            options: {
                // scales: {
                //     yAxes: [{
                //         ticks: {
                //             beginAtZero: true
                //         }
                //     }]
                // },
                // responsive: true,
                // maintainAspectRatio: false,
                // plugins: {
                //     labels: {
                //         render: 'value'
                //     }
                // },
                // legend: {
                //     display: false
                // }
                <?php
                if ($chartType == 1) {
                    echo "scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            labels: {
                                render: 'value'
                            }
                        },
                        legend: {
                            display: false
                        }";
                } else {
                    echo "legend: {
                            labels: {
                                // fontSize: 16 
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            labels: [
                                // {
                                //     render: 'label',
                                //     position: 'outside'
                                // },
                                // {
                                //     render: 'percentage'
                                // }
                                {
                                    render: 'percentage',
                                    // fontColor: ['green', 'white', 'red'],
                                    // precision: 2
                                    // fontSize: 16
                                }
                            ]
                        }";
                }
                ?>
            }
        });
    </script>
</body>

</html>