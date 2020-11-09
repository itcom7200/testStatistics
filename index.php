<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> <i class="fa fa-line-chart fa-lg" aria-hidden="true"></i> CLM Statistics </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-primary my-2 my-sm-0" href="login.php">Log In</a>
                </form>


            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 pb-4">
                <div class="block2 text-center shadow p-3 bg-white rounded">
                    <h3>สถิติการเข้าใช้บริการ   ศูนย์บรรณสารฯ 2563</h3>
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                    <ul>
                        <li>Lorem, ipsum.</li>
                    </ul>
                </div>

            </div>

            <div class="col-12 col-md-4 pb-4">
                <div class="block2 text-center shadow p-3 bg-white rounded">
                    <h3>สถิติการเข้าใช้แยกตามสำนักวิชามากที่สุด 5 อันดับ</h3>
                    <div class="chart-container">
                        <canvas id="myChart2"></canvas>
                    </div>
                    <ul>
                        <li>ตุลาคม 2563</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 pb-4">
                <div class="block2 text-center shadow p-3 bg-white rounded">
                    <h3>สถิติการเข้าใช้บริการแยกตามประเภทการเข้าถึง</h3>
                    <div class="chart-container">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-8 pb-4">
                <div class="block2 text-center shadow p-3 bg-white rounded">
                    <h3>สถิติการยืม-คืน ทรัพยากรสารสนเทศ 2563</h3>
                    <div class="table-responsive-xl table-responsive">
                        <table class="table py-4">
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
                    <ul>
                        <li>Lorem, ipsum.</li>
                    </ul>
                </div>

            </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- bootstrap4 cdn -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- chart js cdn -->
    <script src="chartjs-plugin-labels.js"></script>

    <?php
    //query
    $stmt = $conn->query("select * 
    from maincsv
    inner join filecsv
    on maincsv.idfilecsv = filecsv.id");

    $stmt->execute();
    $result = $stmt->fetchAll();

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    $file = new File();
    $dataFilebar = $file->data($result[0][6]);
    $dataFileDoughnut = $file->data($result[1][6]);
    $dataFilePie = $file->data($result[2][6]);

    $barChart = new Chart();
    $dnChart = new Chart();
    $pieChart = new Chart();

    // echo "<pre>";
    // print_r($dataFilebar);
    // echo "</pre>";
    ?>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    $barChart->label($dataFilebar);
                    ?>
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?php
                        $barChart->value($dataFilebar);
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)'

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
                labels: [
                    <?php
                    $dnChart->label($dataFileDoughnut);
                    ?>
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?php
                        $dnChart->value($dataFileDoughnut);
                        ?>
                    ],
                    backgroundColor: [
                        "#8adfe2",
                        "#55c5d1",
                        "#4699c3",
                        "#ffd57e",
                        "#f79c65"
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    labels: [{
                        render: 'percentage',
                        precision: 2
                    }]
                }
            }
        });

        var ctx3 = document.getElementById('myChart3').getContext('2d');
        var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: [
                    <?php
                    $pieChart->label($dataFilePie);
                    ?>
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?php
                        $pieChart->value($dataFilePie);
                        ?>
                    ],
                    backgroundColor: [
                        "#8adfe2",
                        "#55c5d1",
                        "#4699c3",
                        "#ffd57e",
                        "#f79c65"
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    labels: [{
                        render: 'percentage',
                        precision: 2
                    }]
                }
            }
        });
    </script>

</body>

</html>