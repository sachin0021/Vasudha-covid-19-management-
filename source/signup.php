<?php

session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("remotemysql.com", "k8xMzRVEWp", "u9qS7WCp0z", "k8xMzRVEWp");

if (mysqli_connect_error()) {
    die("There is an error connecting database");
}

$f_name       = '';
$l_name       = '';
$full_name    = ''; //concatenating into single string
$email        = '';
$gender       = '';
$phone_number = '';
$address      = '';
$gender       = '';
$city         = '';
$state        = '';
$zip          = '';
$full_address = ''; //concatenating into single string
$password     = '';
$age          = '';
// $currentDate  = date('Y-m-d');
$string = '';

if (array_key_exists("submit", $_POST)) {
    $f_name       = $_POST['fname'];
    $l_name       = $_POST['lname'];
    $full_name    = $f_name . " " . $l_name; //concatenating into single string
    $email        = $_POST['email'];
    $gender       = $_POST['gender'];
    $phone_number = $_POST['phone'];
    $address      = $_POST['address'];
    $city         = $_POST['city'];
    $state        = $_POST['state'];
    $zip          = $_POST['zip'];
    $password     = $_POST['password'];
    $age          = $_POST['age'];

    $query  = "SELECT count(email) from patient where '$email'=email";
    $result = mysqli_query($link, $query);
    $row    = mysqli_fetch_array($result);
    echo $row[0];
    if ($row[0] == 0) {
        $sql = "INSERT INTO patient
                values ('$full_name','$age','$gender','$phone_number','$email','$city','$zip','$state','$password')";

        if (mysqli_query($link, $sql)) {

            $string = '<div class="alert alert-success" role="alert">
                            Signed in Successfully!</div>';
        }
    } else {
        $string = '<div class="alert alert-danger" role="alert">
                            This email id has already been used.Try another!!</div>';

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>signup</title>
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
    <link href="home_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <style type="text/css">
    .formbox {
        text-align: center;
        margin-top: 100px;
        width: 850px;
        /* height: 450px; */
        margin-bottom: 80px;
    }
    </style>

</head>

<body>

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark p-3 ">
        <a class="navbar-brand" href="index.php" id="nm">
            <img src="images/icon1.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Vasudha
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">STATUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="plasma.php">PLASMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://nostalgic-mccarthy-b79a95.netlify.app/">STATUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">LOGIN</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>



    <!-- ======= Intro Section here ======= -->

    <div class="container formbox">
        <form method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="container">
                    <label><b>Personal Information</b></label>
                </div>
                <br>
                <div class="col-md-4 mb-3">
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option selected hidden value=""></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="phone">Contact number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="dob">Age</label>
                    <input type="text" class="form-control" name="age" id="age" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <br>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="address"><b>Address</b></label>
                    <input type="text" name="address" class="form-control" id="address" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" id="state" required>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="number" class="form-control" name="zip" id="zip" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>

            <br>
            <div class="form-group">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="password"><b>Password</b></label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                id="password" minlength="7" required>
                            <div class="invalid-feedback">
                                Please password with atleast 7 characters
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <!-- <label for="confirmPassword">Confirm Password</label> -->
                            <input type="password" class="form-control" placeholder="Confirm your Password"
                                name="confirmPassword" id="confirmPassword" minlength="7" required>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <button name="submit" id="submit"class="btn btn-primary" type="submit">Submit form</button>
            </center>
        </form>
        <div>
            <?php echo $string ?>
        </div>
    </div>

    <!-- ======= Intro Section ends here======= -->


    <!-- ======= Footer Starts here======= -->
    <hr>
    <footer class="page-footer font-small blue  pt-4">

        <div class="footer-copyright text-center py-3">© 2020 Copyright: Vasudha
        </div>

    </footer>
    <!-- ======= Footer Ends here======= -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!--THIS SCRIPT IS FOR CHECKING IF THE INFORMATION IS FILLED IN FORM-->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
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