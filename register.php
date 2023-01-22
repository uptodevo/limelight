<?php

session_start();

include('server.php');


if(isset($_POST['reg_user']))
{
	
// initializing variables
$username = $_POST["username"];
$password = $_POST["password"];
$dob = $_POST["dob"];



    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['dob']=$dob;

    list($year, $month, $day) = explode("-", $dob);
    echo "<script>alert('$dob');</script>";
    $birthday = mktime(0,0,0, (int)$month, (int)$day, (int)$year);
    $difference= time()- $birthday;
    $age= floor ($difference / 31556926);

    $q = "insert into users (username, password, dob) values ('$username','$password','$dob')";
    if($r = mysqli_query($con, $q)){
        echo "<script>alert('inbserted');</script>";
    }

    if ($age >=17) header ('Location:login.php');
    else header ('Location:login.php');
   echo 'You registered successfully!';


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

  <title>Register</title>
</head>

<body>

  <section class="vh-160" style="background-color: #1A1B1E;">
    <div class="container py-5 h-160">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form action="register.php" class="mx-1 mx-md-4" method="POST">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" class="form-control" required>
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="date" name="dob" class="form-control" required>
                        <label class="form-label" for="form3Example4cd">Date of birth</label>
                      </div>
                    </div>



                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-warning" name="reg_user"></button>

                    </div>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already member?
                      <a href="login.php">Login as member</a></p>
                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="images/reg.png" class="img-fluid" alt="Sample image">

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