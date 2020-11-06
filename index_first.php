<?php

include "connection.php";

$stmt = $conn->query("select * 
    from maincsv
    inner join filecsv
    on maincsv.idfilecsv = filecsv.id");

$stmt->execute();
$result = $stmt->fetchAll();

$conn = null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics CLM</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="jumbotron text-center shadow">
                        <pre>
                            <?php // print_r($result); ?>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="header pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> <i class="fa fa-line-chart fa-lg" aria-hidden="true"></i> CLM Statistics </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <!-- <span id="userSpan" class="navbar-text px-5 text-success">
                  <?php // echo $_SESSION['user']; ?>
                </span> -->
                    <a class="btn btn-primary my-2 my-sm-0" href="login.php">Log In</a>
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


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 pb-4">
                <div class="block2 text-center shadow p-3 bg-white rounded">
                    <h2>Timeline</h2>
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                    <ul>
                        <li>Lorem, ipsum.</li>
                        <!-- <li>นักศึกษา 1226 คน</li>
                        <li>บุคลากร: 15 คน</li> -->
                    </ul>
                </div>

            </div>

            <div class="col-12 col-md-4 pb-4">
                <div class="block2 text-center shadow p-3 bg-white rounded">
                    <h2>Ranking</h2>
                    <div class="chart-container">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 pb-2">
                <div class="table block2 shadow p-3 bg-white rounded">
                    
                    <h2 class="text-center">Ranking 2</h2>

                    <div class="chart-container2">
                        <canvas id="myChart3"></canvas>
                    </div>

                </div>
            </div>

            <div class="col-md-8 pb-2">
                <div class="rcm-book shadow p-3 bg-white rounded table-responsive-xl">

                    <h2 class="text-center">Circulation</h2>
                
                    <table class="table py-4"> <!-- table-bordered -->
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Jan</th>
                                <th scope="col">Feb</th>
                                <th scope="col">Mar</th>
                                <th scope="col">Apr</th>
                                <th scope="col">May</th>
                                <th scope="col">Jun</th>
                                <th scope="col">Jul</th>
                                <th scope="col">Aug</th>
                                <th scope="col">Sep</th>
                                <th scope="col">Oct</th>
                                <th scope="col">Nov</th>
                                <th scope="col">Dec</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Borrow</th>
                                <td>2380</td>
                                <td>238</td>
                                <td>54</td>
                                <td>238</td>
                                <td>238</td>
                                <td>54</td>
                                <td>238</td>
                                <td>238</td>
                                <td>54</td>
                                <td>238</td>
                                <td>238</td>
                                <td>54</td>
                            </tr>
                            <tr>
                                <th scope="row">Renew</th>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th scope="row">Return</th>
                                <td>247</td>
                                <td>247</td>
                                <td>53</td>
                                <td>247</td>
                                <td>247</td>
                                <td>53</td>
                                <td>247</td>
                                <td>2407</td>
                                <td>53</td>
                                <td>247</td>
                                <td>247</td>
                                <td>53</td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td>507</td>
                                <td>507</td>
                                <td>107</td>
                                <td>507</td>
                                <td>507</td>
                                <td>107</td>
                                <td>507</td>
                                <td>507</td>
                                <td>107</td>
                                <td>5007</td>
                                <td>507</td>
                                <td>107</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <!--<div class="container">
        <div class="row">
            <div class="col-md">
                <p><?php

                    function readCSV($filePath)
                    {

                        $dir = "upload_file/$filePath";

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
                    // echo $result[0]['filename'];

                    $file1 = $result[0]['filename'];
                    $file2 = $result[1]['filename'];

                    $resultChart1 = readCSV($file1);
                    $resultChart2 = readCSV($file2);

                    // print_r($resultChart1);


                    ?></p>
                <!-- <pre>
                    <?php
                    // print_r($resultChart1);

                    // foreach ($resultChart1 as $key => $value) {
                    //     print_r('"' . $value[0] . '"');
                    //     echo ",";
                    // }
                    ?> -->
    <!-- </pre>
                <hr>
                <pre>
                    <?php
                    //print_r($resultChart2);


                    ?>
                </pre>
            </div>
        </div>
    </div>-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- bootstrap4 cdn -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- chart js cdn -->
    <script src="chartjs-plugin-labels.js"></script>


    <!-- <script src="main.js"></script> -->
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    foreach ($resultChart1 as $key => $value) {
                        print_r('"' . $value[0] . '"');
                        echo ",";
                    }
                    ?>
                ],
                datasets: [{
                    // label: '# of Votes',
                    data: [
                        <?php
                        foreach ($resultChart1 as $key => $value) {
                            print_r('"' . $value[1] . '"');
                            echo ",";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        // "#F7464A",
                        // "#F7464A",
                        // "#F7464A",
                        // "#F7464A",
                        // "#F7464A",
                        // "#F7464A",

                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd',
                        '#ffc0cd'

                        // 'rgba(54, 162, 235, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)'

                        // 'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        // 'rgba(75, 192, 192, 1)',
                        // 'rgba(153, 102, 255, 1)',
                        // 'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
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
                }
            }
        });

        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: [ //"ศิลปศาสตร์", "การจัดการ", "รัฐศาสตร์และนิติศาสตร์", "เภสัชศาสตร์", "สหเวชศาสตร์"
                    <?php
                    foreach ($resultChart2 as $key => $value) {
                        print_r('"' . $value[0] . '"');
                        echo ",";
                    }
                    ?>

                ],
                datasets: [{
                    label: '# of Votes',
                    data: [ //156, 234, 112, 116, 121
                        <?php
                        foreach ($resultChart2 as $key => $value) {
                            print_r('"' . $value[1] . '"');
                            echo ",";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        // "#F7464A",
                        // "#46BFBD",
                        // "#FDB45C",
                        // "#949FB1",
                        // "#46BFBD",
                        "#8adfe2",
                        "#55c5d1",
                        "#4699c3",
                        "#ffd57e",
                        "#f79c65"

                    ],
                    // borderColor: [
                    //     'rgba(255, 99, 132, 1)',
                    //     'rgba(54, 162, 235, 1)',
                    //     'rgba(255, 206, 86, 1)',
                    //     'rgba(75, 192, 192, 1)',
                    //     'rgba(153, 102, 255, 1)'
                    // ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
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
                }
                // legend: {
                //     display: false
                // }

            }
        });


        // chart3 
        var ctx3 = document.getElementById('myChart3').getContext('2d');
        var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
                datasets: [{
                    label: '5678',
                    data: [50, 62, 62, 53, 45],
                    backgroundColor: [
                        '#ce97fc',
                        '#f6a5ea',
                        '#f9aa9d',
                        '#fddf7d',
                        '#9bfbe0',
                        // '#f7464a'
                    ]

                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    labels: {
                        render: 'percentage'
                    }
                }
            }
        });
    </script>

</body>

</html>