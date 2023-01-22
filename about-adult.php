<?php 
 require_once("server.php");
include('includes/header.php');

session_start();

if (!$_SESSION ['over18'])
{
    header("adult.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limelight about</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&amp;family=Montserrat:ital,wght@1,100;1,300&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/e524ad7d5a.js" crossorigin="anonymous"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="style/style.css">

</head>



<body>

    <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Limelight</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="adult.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adult-events.php">Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=" about-adult.php">About</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="adult-contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">logout</a>
                    </li>
                </ul>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <i class="badge bg-warning text-dark ">Adult member</i>

                            <img src="images/user.png" width="50" height="50" class="rounded-circle">


                            <p class="text-warning"><?php echo $_SESSION['username']?></p>

                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </nav>

    </head>
<style>
    .wrapper {
        height: 100vh;
        background: #000;
        background: url("https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1756&q=80");
        background-size: cover;

    }
</style>


<body>



    <div class="wrapper">

    </div>



    <!-- Hero -->

    <!-- Page section example for content below the video header -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h3>About Limelight</h3>
                    <p>Founded in the United Kingdom in 2018, following the acquisition of Warner Village
                        Cinemas, Limelight is part of Europe's largest cinema group.</p>
                    <p>The company has opened several venues across the UK over the years and plans to open more in
                        Europe in the coming years.</p>
                    <p>Limelight is dedicated to the continued expansion and development of its premium entertainment
                        'big screen' experience, delivering the best content in the best environment, combined with the
                        best technology.</p>
                    <p>In addition to highly anticipated blockbusters, Limelight offers a variety of content, with
                        event cinema titles ranging from opera, ballet, musicals and national theatre.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-warning" style="background-color: #1b1c1d">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Limelight
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis!
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-warning mb-4 font-weight-bold">USEFUL LINKS</h6>
            <p>
              <a href="about-adult.php" class="text-reset">About</a>
            </p>
            <p>
              <a href="adult-contacts.php" class="text-reset">Contacts</a>
            </p>
            <p>
              <a href="adult-events.php" class="text-reset">Events</a>
            </p>
            <p>
              <a href="login.php" class="text-reset">Log out</a>
            </p>
          </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Edinburgh</p>
                        <p><i class="fas fa-envelope mr-3"></i> limelight@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                        <!-- Facebook -->
                        <a class="btn btn-warning btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-warning btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->


                        <!-- Instagram -->
                        <a class="btn btn-warning btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-instagram"></i></a>



                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="bg-dark text-center text-light p-3">
            © 2020 Copyright:Limelight 2022</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>