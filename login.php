<?php

if (isset($_SESSION['over18']) && $_SESSION['over18'] == 1)
{
  header("location: adult.php");
}

if (isset($_SESSION['over18']) && $_SESSION['over18'] == 0)
{
  header("location: juniors.php");
}



include('server.php');

session_start();



//stay on same page after submit button is clicked.
if(isset($_POST['login_user']))
{
	
// initializing variables
$username = $_POST ["username"];
$password = $_POST ["password"];


echo ($username . " " . $password);



$sqlCheck = "SELECT * FROM users 
WHERE username = '$username'
AND password = '$password' ";

$check = mysqli_query ($con, $sqlCheck);
$count = mysqli_num_rows ($check);

$row = mysqli_fetch_array($check, MYSQLI_ASSOC);

if ($count == 1)

{
	echo ("you are logged in!");
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
    
    $dateofbirth = $row['dob'];
    echo "<script>alert('$dateofbirth');</script>";
    list($year, $month, $day) = explode("-", $dateofbirth);
    $birthday = mktime(0,0,0, $month, $day, $year);
    $difference= time()- $birthday;

    $age= floor ($difference / 31556926);


    if ($age>= 18)
    {
    $_SESSION ['over18'] = 1;
    header("location:adult.php");
    }

    else 
    {
    $_SESSION['over18'] = 0;
    header ("location:juniors.php");
    }
	
}

else 
{
	echo ("you are not a member!");

}
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>
</head>

<body>


    <section class="vh-160" style="background-color: #1A1B1E;">
        <div class="container py-5 h-160">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">


                                <img src="images/login.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">



                                    <form action="login.php" method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Limelight</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" class="form-control" required>
                                            <label class="form-label" for="form2Example17">Your Name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control" required>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input type="submit" class="btn btn-primary" name="login_user"></button>

                                        </div>


                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?
                                            <a href="register.php">Register</a></p>

                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>