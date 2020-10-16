<?php 
    session_start();

    include "connection.php";
    $stmt = $conn->query('SELECT * FROM filecsv WHERE type = 1');
    $stmt->execute();
    $result = $stmt->fetchAll();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Admin Module </a>
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
                    <a class="dropdown-item" href="#">Bar Chart</a>
                    <a class="dropdown-item" href="#">Dough-nut</a>
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
        <div class="content-space mx-1">
            <div class="header-content px-3">
                <div class="row">
                    <div class="col-md p-0">
                        <div class="text-center rounded-top bg-secondary p-4">  
                            <h2 class="my-0"> 
                                <i class="fa fa-bar-chart" aria-hidden="true"></i> 
                                Bar Chart
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrap shadow p-3 bg-white">
                <?php 

                    foreach($result as $key => $val){
                        
                        // echo "<pre>";
                        // print_r($val);
                        // echo "</pre>";

                        $key++;
                        $date = strtotime($val['time']);
                        // echo $date."<br>";

                        // echo $val["name"];
                        
                        $div1 = '<div class="col-2">
                                    '.$key.'
                                </div>';
                        

                        $div2 = '<div class="col-6">
                                    <a href="record.php?id='.$val["id"].'&filePath='.$val['filename'].'">
                                        '.$val["name"].'
                                    </a>
                                </div>';
                                // '.$val["name"].'

                        $div3 = '<div class="col-4">
                                    '.date("d/m/Y ", $date).'
                                </div>';


                        echo '<div class="row p-2">';
                        // echo $val['id']."<br>";
                        // echo $val['filename']."<br>";
                        echo $div1;
                        echo $div2;
                        echo $div3;
                        echo '</div>';

                    }
                ?>
                <!-- <div class="row">
                    <div class="col-2">
                        1
                    </div>
                    <div class="col-8 bg-dark" style="height: 200px;">
                        name
                    </div>
                    <div class="col-2 bg-light">
                        data
                    </div>
                </div> /div.row -->

            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <!-- bootstrap4 cdn -->
    
</body>
</html>