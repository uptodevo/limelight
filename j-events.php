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
  <title>Limelight main</title>
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
          <li class="nav-item ">
            <a class="nav-link " aria-current="page" href="juniors.php">Movies</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="j-events.php">Events</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="j-about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="j-contacts.php">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">logout</a>
          </li>
        </ul>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

          <ul class="navbar-nav ">
            <li class="nav-item dropdown">
              <i class="badge bg-warning text-dark ">Junior member</i>

              <img src="images/user.png" width="50" height="50" class="rounded-circle">


              <p class="text-warning"><?php echo $_SESSION['username']?></p>

            </li>
          </ul>


        </div>
      </div>
    </div>
  </nav>

  <!-- Header-->
  <header class="hero d-flex  bg-dark">
    <div class="container px-4 px-lg-5">
      <br><br>
      <h2 class="mb-1 text-warning">January 2023</h2>
      <h3 class="mb-1 text-warning">Events coming up this month!</h3>

      <p class="mb-5 text-white">Get you ticket in advance and don't miss out!</p>

  </header>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="my-4"></small>
    </h1>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="images/sherek.jfif" alt="" height="300px" width="600">
        </a>
      </div>
      <div class="col-md-5 ">

        <h2 class=" text-warning">
          Shrek
        </h2>
        <p>One of the greatest animated masterpieces is now back at the Limelight cinema venue. Available from the 15th
          of January until the 1st of February. Recapture one of the most thrilling experiences.</p>
        <a class="btn btn-warning" href="#">Book now</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="images/spiritway.jpg" alt="" height="200px" width="600">
        </a>
      </div>
      <div class="col-md-5">
        <h2 class=" text-warning">
          Spirited Away
        </h2>
        <p>Hayao Miyazaki is a Japanese animated fairy tale film released in 2001. The novel combines elements of
          mediaeval fantasy, contemporary romance, and paranormal realism.</p>
        <a class="btn btn-warning" href="#">Book now</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="images/music.jpg" alt="" height="300px" width="600">
        </a>
      </div>
      <div class="col-md-5">
        <h2 class=" text-warning">
          Rock Live
        </h2>
        <p>Relive top rock's most successful golden age. Return to the 1970s to enjoy your favorites rock music and make
          new memories.</p>
        <a class="btn btn-warning" href="#">Book now</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>



  </div>

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
              <a href="j-about.php" class="text-reset">About</a>
            </p>
            <p>
              <a href="j-contacts.php" class="text-reset">Contacts</a>
            </p>
            <p>
              <a href="j-events.php" class="text-reset">Events</a>
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
            <a class="btn btn-warning btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-warning btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->


            <!-- Instagram -->
            <a class="btn btn-warning btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>



          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="bg-warning text-center text-dark p-3">
      © 2023 Copyright:Limelight</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- End of .container -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>


</body>

</html>