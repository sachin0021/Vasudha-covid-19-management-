<?php

session_start();
$_SESSION['action'] = '';
$string             = '<li class="nav-item">
    <a class="nav-link js-scroll" id="login" href="login.php">Login</a>
  </li>';

if (array_key_exists("email", $_SESSION) and $_SESSION["email"]) {
    $string = '<li class="nav-item">
      <a class="nav-link js-scroll" id="logout" href="login.php?logout=1">Logout</a>
    </li>';

}

$link = mysqli_connect("remotemysql.com", "k8xMzRVEWp", "u9qS7WCp0z", "k8xMzRVEWp");
if (mysqli_connect_error()) {
    die('database connection error');
}
$string1  = '';
$count    = 0;
$areaname = '';
if (array_key_exists('search', $_POST)) {
    $areaname = $_POST['areaname'];
    $query    = "SELECT * from hospital where '$areaname'=areaname";
    $result   = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $count   = $count + 1;
        $string1 = $string1 . '<tr>
           <th scope="row">' . $count . '</th>
           <td>' . $row["hos_name"] . '</td>
           <td>' . $row["number_of_patients"] . '</td>
           <td>' . $row["total_no_of_beds"] . '</td>
           <td>' . $row["beds_avialable"] . '</td>
         </tr>';
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Centers</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link rel="icon" type="image/png" href="images/icon.png">

    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Vendor CSS Files -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Template Main CSS File -->

    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <style type="text/css">
    .form-header {
        color: floralwhite;
        padding: 10px 20px 10px 20px;
        border-radius: 5px;
    }

    .footer {
        position: absolute;
        bottom: 0;
    }
    </style>

</head>

<body>

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="images/icon1.png" width="30" height="30" class="d-inline-block align-top" loading="lazy" alt="">
            Vasudha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://nostalgic-mccarthy-b79a95.netlify.app/">STATUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="plasma.php">PLASMA</a>
                </li>
                <?php echo $string; ?>
            </ul>

        </div>
    </nav>
    <div class="container mt-5 mb-5">

        <form method="post">
            <div class="form-row justify-content-center mb-3">
                <div class="form-header bg-dark">
                    <h2>COVID Centers Nearby</h2>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-12 col-sm-2">
                    <label for="areaname"> <b> Area Name</b></label>
                </div>
                <div class="col-12 col-sm-5">
                    <input type="text" name="areaname" class="form-control" placeholder="Enter your Area Name"
                        value="<?php echo $_POST['areaname']; ?>">
                </div>
                <div class="col-12 col-sm-3">
                    <button class="btn btn-outline-success" name="search">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container justify-content-center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Total No. of Patients</th>
                    <th scope="col">Total No. of Beds</th>
                    <th scope="col">Beds available</th>

                </tr>
            </thead>
            <tbody>
                <?php echo $string1; ?>
            </tbody>
        </table>

    </div>

    <!-- ======= Intro Section ends here======= -->


    <!-- ======= Footer Starts here======= -->
    <div class="container">
        <footer class="container footer">
            <div class="row row-content justify-content-center">
                <div class="col col-auto">
                    © 2020 Copyright: Vasudha
                </div>
            </div>

        </footer>
    </div>
    <!-- ======= Footer Ends here======= -->


    <!--THIS SCRIPT IS FOR CHECKING IF THE INFORMATION IS FILLED IN FORM-->
    <script>

    </script>
    <!--TILL HERE-->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="main.js"></script>

</body>

</html>