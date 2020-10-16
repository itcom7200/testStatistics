<?php
    session_start();

    $template_Alert = null;
    include "connection.php";

    if(!empty($_GET['insId'])){
        // $test = "ins id eiei";
        $stmt = $conn->prepare("SELECT * FROM filecsv where id = :id");
        $stmt->bindParam(":id", $_GET["insId"]);

        $stmt->execute();
        $result = $stmt->fetchAll();

        $lastInsName = $result[0]["name"];
        $alert = "เพิ่มข้อมูล \"$lastInsName\" เรียบร้อยแล้ว";

        $template_Alert = '<div class="alert alert-success" role="alert">'.$alert.'</div>';
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="style.css">
    <!-- <style>
        
    </style> -->
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Admin Module </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="row">
            <div class="col-md">
                
                <?php if(!empty($template_Alert)){
                    echo $template_Alert;
                    $_GET['insId'] = null;
                    }
                ?>

                <div class="form-wrap">
                    <div class="rounded-top bg-secondary">
                        <div class="text-center">
                            <h3 class="p-3 text-light mb-0">Upload File CSV</h3>
                        </div>
                    </div>
                    <form action="file_upload.php" method="POST" class="shadow p-3 bg-white" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Enter Filename: </label>
                            <input type="text" class="form-control" id="name" name="name" 
                            placeholder="Enter File Name" required>
                            <small class="form-text text-muted">ตัวอย่างชื่อไฟล์เช่น เช่น "ข้อมูลเดือนตุลาคม 63"</small>
                        </div>
                        <select class="form-control" id="chart" name="chart" required>
                          <option disabled>Select Chart Type</option>
                          <option value="bar" selected="selected">Bar Chart</option>
                          <option value="doughnut">Dough-nut Chart</option>
                        </select>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="fileName" name="file" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-xs-block">Submit</button>
                            <!-- <a href="admin.html" class="btn btn-primary btn-xs-block">Log in</a> -->
                        </div>
                    </form>
                </div>
                
                


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