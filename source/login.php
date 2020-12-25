<?php

session_start();
if (array_key_exists("logout", $_GET) and $_GET['logout'] == 1) {
    session_destroy();
    header("location:index.php");
}

$link = mysqli_connect("remotemysql.com", "k8xMzRVEWp", "u9qS7WCp0z", "k8xMzRVEWp");

if (mysqli_connect_error()) {
    die("There is an error connecting database");
}

$error = '';
$email = '';
if (array_key_exists('submit', $_POST)) {

    if (!$_POST['email'] or !$_POST['password']) {
        $error = '<div class="alert alert-danger" role="alert">
        Invalid Email / Password !
        </div>';
    }

    if ($error == '') {
        $email  = $_POST["email"];
        $query  = "SELECT password FROM patient WHERE '$email'=email";
        $result = mysqli_query($link, $query);
        $row    = mysqli_fetch_array($result);

        if ($row[0] != $_POST['password']) {
            $error = '<div class="alert alert-danger" role="alert">
            Invalid Email / Password !</div>';
        } else {
            $_SESSION['email'] = $_POST['email'];
            header("location:index.php");
        }
    }
}
?>
<!DOCTYPE doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Bootstrap CSS -->
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
    <title>
        login
    </title>
    </link>
    </meta>
    </meta>
    <link rel="icon" type="image/png" href="images/icon1.png">
    <link href="home_style.css" rel="stylesheet">
    <!--
            <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
            </link> -->
    </link>
    <style type="text/css">
    .box {
        margin-left: 400px;
        width: 300px;
    }
    </style>
</head>

<body>
    <!-- ======= Header/ Navbar starts======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php" id="nm">
                <img alt="" class="d-inline-block align-top" height="38" loading="lazy" src="images/icon1.png" width="38">
                Vasudha
                </img>
            </a>
            <button aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler collapsed" data-target="#navbarDefault" data-toggle="collapse" type="button">
                <span>
                </span>
                <span>
                </span>
                <span>
                </span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="index.php">
                            Home
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link js-scroll" href="about.php">
                            About
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="plasma.php">
                            plasma
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link js-scroll" href="https://nostalgic-mccarthy-b79a95.netlify.app/">
                            Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="signup.php">
                            Signup
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======= Header/ Navbar ends ======= -->
    <!-- ======= Intro Section ======= -->
    <div class="intro route bg-image" id="home" style="background-image: url(images/pic1.jpg)">
        <div class="overlay-itro">
        </div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="intro-title mb-4">
                        Welcome User
                    </h1>
                    <br>
                    <form method="post">
                        <div class="box">
                            <div class="form-group">
                                <input aria-describedby="emailHelp" class="form-control" placeholder="Enter email"
                                    type="email" name="email">
                                </input>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" name="password">
                                </input>
                            </div>
                            <button class="btn btn-primary" type="submit" name="submit">
                                Login
                            </button>
                            <div>
                                <?php echo "<br>$error" ?>
                            </div>
                        </div>
                    </form>
                    </br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- End Intro Section -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
</script>