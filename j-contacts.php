<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limelight contacts</title>
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
    .wrapper {
        height: 100vh;
        background: #000;
        background: url("https://th.bing.com/th/id/R.b73cce9370261369ceb9d991efbf8612?rik=YyYtraJNTJx5Xg&riu=http%3a%2f%2fedinburgh.anglican.org%2fwp-content%2fuploads%2f2016%2f11%2f14654395264_903259fe93_k.jpg&ehk=Ffs2DNV%2bvtOaGblc94Ze9TroE%2bnatTElxRAtd2CrF10%3d&risl=&pid=ImgRaw&r=0");
        background-size: cover;

    }

    .overlay {
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.8);

    }
</style>


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
                        <a class="nav-link " aria-current="page" href="juniors.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="j-events.php">Events</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="j-about.php">About</a>
                    </li>

                    <li class="nav-item active">
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
    <div class="wrapper">
        <div class="overlay">

            <!-- contact form-->

            <div class="container ">
                <div class="rounded d-sm-flex justify-content-center">
                    <div class=" col-md-4-contact col-sm-6 shadow-lg p-5">
                        <div class="text-center">
                            <h3 class="text-warning">CONTACT US</h3>
                        </div>

                        <!-- Bootstrap 5 starter form -->

                        <form name="contact" id="contactForm" method="POST" data-netlify="true">

                            <!-- Name input -->
                            <div class="mb-3">
                                <label class="form-label text-warning" for="name">Name</label>
                                <input name="name" class="form-control" id="name" type="text" placeholder="Name"
                                    required />

                            </div>

                            <!-- Email address input -->
                            <div class="mb-3">
                                <label class="form-label text-warning" for="emailAddress">Email Address</label>
                                <input name="email" class="form-control" id="emailAddress" type="email"
                                    placeholder="Email Address" required />
                            </div>
                            <!-- Message input -->
                            <div class="mb-3">
                                <label class="form-label text-warning" for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" text="text"
                                    placeholder="Message" required></textarea>
                            </div>
                            <!-- Form submit button -->
                            <button class="btn btn-warning" type="submit">Submit</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>

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
            © 2023 Copyright:Limelight</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>