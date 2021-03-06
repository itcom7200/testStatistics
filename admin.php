<?php

session_start();

include "connection.php";

if (empty($_SESSION['user'])) {
  header('location: login.php');
}

$stmt = $conn->query("SELECT * FROM filecsv");
$stmt->execute();
$result = $stmt->fetchAll();

$checkMain = $conn->query("SELECT * FROM maincsv");
$checkMain->execute();
$resultMain = $checkMain->fetchAll();

$timeline =  $resultMain[0]["idfilecsv"];
$doughnut =  $resultMain[1]["idfilecsv"];
$pie =  $resultMain[2]["idfilecsv"];
$table = $resultMain[3]["idfilecsv"];


if (empty($_GET['id'])) {
  $_GET['id'] = null;
}

$deleteId = $_GET['id'];

$alert = "ID: $deleteId ได้ลบแล้ว"; //
$template_Alert = '<div class="alert alert-success" role="alert">' . $alert . '</div>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="jquery.dataTables.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
  <!-- Font -->
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
    <div class="row">
      <div class="col-md shadow p-3 bg-white">

        <?php
        if (!empty($_GET['id'])) {
          echo $template_Alert;
        }
        ?>

        <div class="block2">
          <table class="table" id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <!-- <th scope="col">Time</th> -->
                <th scope="col">Upload Time</th>
                <th scope="col text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($result as $x => $val) {
                // $count = 1;
                // echo "<pre>";
                // print_r($val);
                // echo "</pre>";
                $id = $val["id"];
                // echo $id."<br>";
                $file = $val['name'];
                $filename = $val['filename'];
                $date = strtotime($val['time']);

                // if ($val["type"] == 1) {
                //   $type = "Bar";
                // } else $type = "Dough nut";

                switch ($val["type"]) {
                  case 1:
                    $type = "Bar";
                    break;
                  case 2:
                    $type = "Doughnut";
                    break;
                  case 3:
                    $type = "Pie";
                    break;
                  case 4:
                    $type = "Table";
                    break;
                }

                $link = "<td><a href='record.php?id=$id'>$file</a></td>";

                if ($val["type"] === "4") { // if table redirect to another page
                  $link = "<td><a href='table.php?id=$id'>$file</a></td>";
                }

                $x++;
                echo "<tr>";
                echo "<th scope=\"row\">$x</th>";
                // echo "<td><a href=\"record.php\">".$val['name']."</a></td>";
                echo $link;
                echo "<td>" . $type . "</td>";
                echo "<td>" . date("d/m/Y ", $date) . "</td>";

                if ($id === $timeline || $id === $doughnut || $id === $pie || $id === $table) {
                  echo '<td><a class="btn btn-outline-success">Active</a></td>';
                } else {
                  echo '<td><a class="btn btn-danger"
                      href="del_file.php?id=' . $id . '&filepath=' . $val['filename'] . '
                      ">Delete</a></td>';
                }


                echo "</tr>";
                // $count++;
              }
              ?>
              <!-- <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr> -->
            </tbody>
          </table>


        </div> <!-- block 2 -->

      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- bootstrap4 cdn -->

  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <!-- datatable cdn -->

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();


      // console.log("tester");
    });
  </script>

</body>

</html>