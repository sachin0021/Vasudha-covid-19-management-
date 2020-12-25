<?php
$link = mysqli_connect("remotemysql.com", "k8xMzRVEWp", "u9qS7WCp0z", "k8xMzRVEWp");
if (mysqli_connect_error()) {
    die('database connection error');
}
$string1 = '';
if (array_key_exists('donerButton', $_POST)) {
    $name     = $_POST['name'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $hosid    = $_POST['hosid'];
    $hospital = $_POST['hospital'];
    $query    = "INSERT into pdoner values('$name','$phone','$address','$hospital','$hosid')";
    if ($result = mysqli_query($link, $query)) {
        $string1 = '<div class="alert alert-success" role="alert">
            Thank you!! Your form has been submitted successfully.
          </div>';
    }

}
if (array_key_exists('recipientButton', $_POST)) {
    $name     = $_POST['name'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $hosid    = $_POST['hosid'];
    $hospital = $_POST['hospital'];
    $query    = "INSERT into precipient values('$name','$phone','$address','$hospital','$hosid')";
    if ($result = mysqli_query($link, $query)) {
        $string1 = '<div class="alert alert-success" role="alert">
            Thank you!! Your form has been submitted successfully.
        </div>';
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Plasma Doner</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link rel="icon" type="image/png" href="images/logo1.png">

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
    .box {
        color: black;
        width: 700px;
        margin: 5em auto;
        padding: 1em;
        /* background-color: #fdfdff; */
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0, 0, 0, 0.02);
    }

    .heading {
        color: black;
        width: 300px;
        margin: 4em auto 2em auto;
        padding: 1em;
        /* background-color: #fdfdff; */
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0, 0, 0, 0.02);
    }

    .form_box {
        color: black;
        width: 400px;
        margin: 0 auto;
        padding: 1.5em;
        background-color: #f2f2f2;
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0, 0, 0, 0.02);
    }

    .close {
        color: floralwhite;
        opacity: 1;
    }

    .modal-header {
        background-color: #00cc99;
    }

    .modal-title {
        color: floralwhite;
    }
    </style>


</head>

<body id="page-top">

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="home.php" id="nm">
                <img src="images/icon1.png" width="38" height="38" class="d-inline-block align-top" alt=""
                    loading="lazy">
                Vasudha
            </a>
            <!-- <a class="navbar-brand js-scroll" href="#page-top">APNA BANK</a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="index.php">Home</a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link js-scroll" href="about.php">About</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="https://nostalgic-mccarthy-b79a95.netlify.app/">Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="signup.php">SignUp</a>
                    </li>

                    <!-- <li class="nav-item">
            <a class="nav-link js-scroll" href="feedback.php">feedback</a>
          </li> -->
                    <!-- <li class="nav-item">
            <a class="nav-link js-scroll" href="#logout">Logout</a>
          </li> -->
                    <?php
if (!empty($str)) {
    echo $str;
}

?>
                    <?php
echo $string;
?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image" style="background-image: url(images/pic1.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="heading alert alert-info" role="alert">
                    <h3><b>Plasma Section</b></h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <?php
echo $string1;
?>
                    </div>
                </div>
                <div class="card-deck box" id="card_section">
                    <div class="card">

                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                <h3><b>Donate Plasma</b></h3>
                            </div>
                            <p class="card-text">If you are really interested in donating your plasma and helping others
                                to fight this COVID, then feel free to come forward and we will take care of everything.
                            </p>
                            <button class="btn btn-primary" name="donerclick" id="donerform">CLICK HERE</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                <h3><b>Want Plasma</b></h3>
                            </div>
                            <p class="card-text">If you want to get plasma of some COVID fighters then click below
                                button and fill some form and we will contact you as soon as possible.</p>
                            <button class="btn btn-primary" name="recipient" id="recipientform">CLICK HERE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <div id="donermodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enter Details</h4>
                    <button type="button" data-dismiss="modal" class="close">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name" class="form-control" placeholder="Enter your Name"
                                    name="name" required />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="phone">Mob. Number</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="tel" id="phone" class="form-control"
                                    placeholder="Enter your 10-digit Mobile number" name="phone"
                                    pattern="[1-9]{1}[0-9]{9}" required />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" class="form-control"
                                    placeholder="Enter Your Email (optional)" name="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="hospital">Hospital id</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="hosid" class="form-control"
                                    placeholder="Hospital id (required)" name="hosid" />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="hospital">Hospital Name</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="hospital" class="form-control"
                                    placeholder="Enter your nearest hospital name" name="hospital" />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <textarea type="textarea" class="form-control" name="address" rows="4"
                                    placeholder="Enter Your Address"></textarea>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 order-sm-first order-last offset-sm-4 col-sm-2">
                                <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                            <div class="col-12 order-first order-sm-last col-sm-2 mb-2">
                                <button class="btn btn-primary form-control" type="submit" name="donerButton">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 order-sm-first order-last offset-sm-4 col-sm">
                                <p class="text muted"><small>We will contact you as soon as possible.</small></p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="recipientmodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enter Details</h4>
                    <button type="button" data-dismiss="modal" class="close">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name" class="form-control" placeholder="Enter your Name"
                                    name="name" required />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="phone">Mob. Number</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="tel" id="phone" class="form-control"
                                    placeholder="Enter your 10-digit Mobile number" name="phone"
                                    pattern="[1-9]{1}[0-9]{9}" required />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" class="form-control"
                                    placeholder="Enter Your Email (optional)" name="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="hospital">Hospital Name</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="hospital" class="form-control"
                                    placeholder="Enter your nearest hospital name" name="hospital" />
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 offset-sm-2 col-sm-2">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <textarea type="textarea" class="form-control" name="address" rows="4"
                                    placeholder="Enter Your Address"></textarea>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 order-sm-first order-last offset-sm-4 col-sm-2">
                                <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                            <div class="col-12 order-first order-sm-last col-sm-2 mb-2">
                                <button class="btn btn-primary form-control" type="submit" name="recipientButton">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12 order-sm-first order-last offset-sm-4 col-sm">
                                <p class="text muted"><small>We will contact you as soon as possible.</small></p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- start -->
    <footer class="page-footer font-small ">


        <!-- Footer Links -->
        <div style="background-color:#1C2331;">


            <div style="background-color:#3F729B;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
                            <h6 class="mb-0">Get connected with us on social networks!</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right  ">

                            <!-- Facebook -->
                            <a class="fb-ic text-white" href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic text-white" href="https://twitter.com/">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <!-- <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>-->
                            <!--Linkedin -->
                            <a class="li-ic text-white" href="https://in.linkedin.com/">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic text-white" href="https://www.instagram.com/">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>

                        </div>

                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->
                    <!-- rahul  -->

                    <hr>
                </div>
            </div>

            <div class="container text-center text-md-left mt-5 ">

                <!-- Grid row -->
                <div class="row mt-3 text-white">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold text-white">Vasudha</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto">
                    <p>Clean your hands often,
                    Cough or sneeze in your bent elbow - not your hands !,
                    Avoid touching your eyes, nose and mouth,
                    Limit social gatherings and time spent in crowded places,
                    Avoid close contact with someone who is sick.</p>
                    <p>Vasudha Care.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <!--<h6 class="text-uppercase font-weight-bold">OUR OFFERINGS</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="#!">Savings Account</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Current Account</a>
                </p>-->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">BrandFlow</a>
                </p> -->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
                </p> -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <!--<h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="#!">Your Account</a>
                </p>-->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                </p> -->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">Shipping Rates</a>
                </p> -->
                        <!--<p>
                    <a class="dark-grey-text" href="#!">Help</a>
                </p>-->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold text-white">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Dr. Sarvepalli Radhakrishnan Road #79 Ganpati Niwas, Bangalore ,India</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> vasudhacare@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
        </div>

        <!-- Footer Links -->

        <!-- Copyright -->
        <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

        <div class="footer-copyright text-center text-white py-3 " style="background-color:#1C2331;">© 2020 Copyright: Vasudha
            <!--<a  style="color:white;" href="https://mdbootstrap.com/"> ApnaBank.com</a>-->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- footer ends -->
    <!-- end -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

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
    <script>
    $("#donerform").click(function() {
        $("#donermodal").modal("show");
    });
    $("#recipientform").click(function() {
        $("#recipientmodal").modal("show");
    });
    </script>

</body>

</html>