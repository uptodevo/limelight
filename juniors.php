<?php 
 require_once("server.php");
include('includes/header.php');

session_start();

if ($_SESSION ['over18'])
{
    header("junior.php");
}




$query= "SELECT * from movies where id = $id";
$result = mysqli_query($con,$query);//changed to $row instead of $result
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


$title = $row['title'];
$title = $_POST['title'];

$title = $row['genre'];
$title = $_POST['genre'];
$image = $row['image'];
$image = $_POST['image'];
$res_num = $_POST['stock'];
$stock = $row['stock'];

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

<style>
    .responsive-object iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    .responsive-object {
        position: relative;
        padding-bottom: 67.5%;
        height: 0;
        margin: 10px 0;
        overflow: hidden;
    }
</style>


<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Limelight</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="juniors.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="j-events.php">Events</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="j-about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="j-contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
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




    <header class="hero d-flex  bg-warning">
        <div class="container-fluid bg-warning">
            <div class="container py-3">

                <h3 class="text-dark">Enjoy the comfortable seats at Limelight cinema</h3>
                <p class="text-primary">Book now every film for 7.50</p>

            </div>
            <div class="container-lg bg-warning">
                <?php 
include('includes/header.php');
    require_once("server.php");

  

    $query = " select * from movies";
    $result = mysqli_query($con,$query);
   
   

    $id = $row['id'];
    $genre = $row['genre'];
    $title = $row['title'];
    $description = $row['description'];
    $pic = $row['image'];
  $stock = $row['stock'];
  

  ?>

                <div class="container bg-warning">
                    <div class=" row">
                        <?php

while($row=mysqli_fetch_assoc($result))
{

$id = $row['id'];
$genre = $row['genre'];
$title = $row['title'];
$description = $row['description'];
$pic = $row['image'];
$stock = $row['stock'];
$director = $row['director'];
?>

                        <div class="col-md-4 col-lg-3">

                            <div class="container-movie bg-warning">
                                <img class="img-fluid " style="height: 420px;"
                                    src='admin/images/<?php echo $row ['image']; ?>'
                                    alt='<?php echo $row ['image']; ?>'>

                                <div class="card-body ">
                                    <br>
                                    <h5 class="card-title text-primary"><?php echo $title?></h5>
                                    <p class="badge bg-primary text-white">
                                        <?php echo $genre?>
                                    </p>
                                    <p class="card-text text-warning">
                                        Director: <?php echo $director?>
                                    </p>



                                    <p class="card-text text-black">
                                        <?php echo $description?>
                                    </p>
                                    <br>





                                </div>

                            </div>
                            <br>
                        </div>
                        <br>
                        <?php
}

?>


                    </div>
    </header>


    <div class="container-fluid bg-dark py-3">

        <div class="row">
            <div class="col-sm-6">
                <div class="responsive-object">
                    <div>
                        <script src="https://cdn.htmlgames.com/embed.js?game=ColoringMandalas&amp;bgcolor=white">
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="responsive-object">
                    <div>
                        <script src="https://cdn.htmlgames.com/embed.js?game=MahjongCollapse&amp;bgcolor=white">
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid d-flex bg-primary">
            <div class="container py-3">

                <h3 class="text-white">Watch movies trailers </h3>

                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    <div class="col">
                        <div class="card border-warning h-100 shadow-sm bg-dark "> <iframe
                                src="https://www.youtube.com/embed/C07UwxyFCgY" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">

                                <h4 class="card-title text-warning">Guardian of Galaxy</h4>
                                <p class="card-text  text-light">Fantasy</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning  h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/SCoBjmK-zBU" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">

                                <h4 class="card-title text-warning">Jwan</h4>
                                <p class="card-text  text-white">Action</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/yVlnvQFVGmU" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">
                                <h4 class="card-title text-warning">Shazam</h4>
                                <p class="card-text  text-white">Comedy</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning  h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/xc52JN1RzTE" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">
                                <h4 class="card-title text-warning">Asterix & Obelix</h4>
                                <p class="card-text  text-white">Comedy</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/vmp9hOJPZaY" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">
                                <h4 class="card-title text-warning">Quantumania</h4>
                                <p class="card-text  text-white">Fantasy</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/qEVUtrk8_B4" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">
                                <h4 class="card-title text-warning">John Wick</h4>
                                <p class="card-text  text-white">Action</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/VnI2MyS6fgo" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">
                                <h4 class="card-title text-warning">Blonde</h4>
                                <p class="card-text  text-white">Drama</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning h-100 shadow-sm bg-dark"> <iframe
                                src="https://www.youtube.com/embed/d9MyW72ELq0" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="card-img-top" height="300"></iframe>
                            <div class="card-body">
                                <h4 class="card-title text-warning">Avatar</h4>
                                <p class="card-text  text-white">Fantasy</p>
                                <div class="ratings">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>





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
        <div class="bg-warning text-center text-dark p-3">
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