<?php
    session_start();

    if(!empty($_SESSION['user'])){
        header('location: admin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> <i class="fa fa-line-chart fa-lg" aria-hidden="true"></i> CLM Statistics </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                  <?php echo $_SESSION['user']; ?>
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
        <div class="row align-items-center row-100 justify-content-center">
            <div class="col-md-6">
                <div class="form-wrap shadow bg-white rounded">
                    <div class="rounded-top bg-info">
                        <div class="text-center">
                            <h3 class="p-3 text-light">Login Admin</h3>
                        </div>
                    </div>
                    <div class="login-form p-3 mb-5">
                        <form action="authen.php" method="POST">
                            <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter Username" required> <!-- aria-describedby="emailHelp"-->
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter Password" required>
                            </div>
                            <!-- <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-info btn-lg btn-xs-block">Submit</button>
                                <!-- <a href="admin.html" class="btn btn-primary btn-xs-block">Log in</a> -->
                            </div>
                        </form>
                    </div>
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