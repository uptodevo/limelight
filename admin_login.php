<?php
session_start(); 
include('server.php');


//stay on same page after submit button is clicked.
if(isset($_POST['admin_log']))
{
	

// initializing variables
$username = $_POST ["username"];
$password = $_POST ["password"];



$sqlCheck = "SELECT * FROM adminlogin 
WHERE username = '$username'
AND password = '$password' ";

$check = mysqli_query ($con, $sqlCheck);
$count = mysqli_num_rows ($check);


$row = mysqli_fetch_array($check, MYSQLI_ASSOC);

if ($count == 1)

{
   
    $_SESSION['adminlogin']= "admin";

    header ("Location:admin/index.php");

}
else
{

 
    echo '<h2 style="color: red">Details provided are incorrect!</h2>' ;
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&amp;family=Montserrat:ital,wght@1,100;1,300&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/e524ad7d5a.js" crossorigin="anonymous"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="style/style.css">
    <title>login</title>
</head>

<body>

    <section class="vh-130" style="background-color: #1A1B1E;">
        <div class="container py-5 h-160">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-7">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">

                            <div class="col-md-6 d-flex align-items-center">

                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="admin_login.php" method="POST">


                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login as Admin
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" class="form-control" required>
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control" required>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit" class="btn btn-primary"
                                                name="admin_log">Login</button>

                                        </div>

                                        <a href="#!" class="small text-muted">Admin access</a>
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