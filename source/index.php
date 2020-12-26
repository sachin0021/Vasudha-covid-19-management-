<?php
session_start();
$_SESSION['action'] = '';
$string             = '<li class="nav-item">
    <a class="nav-link js-scroll" id="login" href="login.php">Login</a>
  </li>
  <li class="nav-item">
            <a class="nav-link js-scroll" href="signup.php">Signup</a>
          </li>';

if (array_key_exists("email", $_SESSION) and $_SESSION["email"]) {
    $string = '<li class="nav-item">
      <a class="nav-link js-scroll" id="logout" href="login.php?logout=1">Logout</a>
    </li>';

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link rel="icon" type="image/png" href="images/icon1.png">

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

</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php" id="nm">
        <img src="images/icon1.png" width="38" height="38" class="d-inline-block align-top" alt="" loading="lazy">
        Vasudha
    </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll" href="about.php>">Admin</a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link js-scroll" href="plasma.php">Plasma</a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link js-scroll" href="#">Service</a>
          </li> -->
          <?php
echo $string;
?>
        <!-- <li class="nav-item"> -->
          <span class="nav-item">
            <a class="nav-link js-scroll" role="button" id="loginbutton">
              Admin
            </a>
          </span>
        <!-- </li> -->
      </ul>
      </div>
    </div>
  </nav>

    <div id="loginmodal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" role="content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                        >
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row mb-3">
                                <div class="col-12 col-sm-2 offset-sm-2">
                                    <label for="emailid">Email Id</label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="emailid"
                                        placeholder="Enter email id"
                                    />
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-12 col-sm-2 offset-sm-2">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        placeholder="Enter password"
                                    />
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="form-check offset-sm-4">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="exapmlecheckbox"
                                    />
                                    <label
                                        for="examplecheckbox"
                                        class="form-check-label"
                                        >Remember me</label
                                    >
                                </div>
                            </div>

                            <div class="form-row mb-2">
                                <div class="col col-sm offset-sm-4">
                                    <button
                                        class="btn btn-secondary col-sm-3 mb-1"
                                        data-dismiss="modal"
                                    >
                                        Cancel
                                    </button>
                                    <button class="btn btn-primary col-sm-3">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(images/pic1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Welcome to VASUDHA</h1>
          <p class="intro-subtitle"><span class="text-slider-items">We are here to help you,Trust VASUDHA,Together we will Defeat COVID-19</span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <!-- Start #main -->
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
             <a href="hospital.php"> <div class="service-ico">
                <span class="ico-circle"><i class="ion-medkit"></i></span>
              </div></a>
              <div class="service-content">
                <h2 class="s-title">Hospitals</h2>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <a href="centers.php"><div class="service-ico">
                <span class="ico-circle"><i class="ion-ios-heart"></i></span>
              </div></a>
              <div class="service-content">
                <h2 class="s-title">COVID Centers</h2>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <a href="https://nostalgic-mccarthy-b79a95.netlify.app/"> <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div></a>
              <div class="service-content">
                <h2 class="s-title">Status</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer Starts here======= -->
  <footer class="page-footer font-small ">

    <!-- Footer Links -->
    <div style="background-color:#1C2331;">


        <div  style="background-color:#3F729B;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
                        <h6 class="mb-0"><b>Get connected with us on social networks!</b></h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right  " >
                        <!-- Facebook -->
                        <a class="fb-ic text-white" href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic text-white" href="https://twitter.com/">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
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
<hr>
            </div>
        </div>

        <div class="container text-center text-md-left mt-5 "  >

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
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"></div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"></div>
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

    <div class="footer-copyright text-center text-white py-3 " style="background-color:#1C2331;">© 2020 Copyright:
        Vasudha
        <!--<a  style="color:white;" href="https://mdbootstrap.com/"> ApnaBank.com</a>-->
    </div>
    <!-- Copyright -->

</footer>
<!-- ======= Footer Ends here======= -->

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

</body>

</html>