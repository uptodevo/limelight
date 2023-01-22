<?php 
include('includes/header.php');
    require_once("server.php");
    $query = " select * from users ";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <script src="https://kit.fontawesome.com/e524ad7d5a.js" crossorigin="anonymous"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end vh-100 shadow-sm">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0">
                        <div class="p-2">
                            <h4>Admin Dashboard</h4>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item"><a href="movies.php" class="text-decoration-none text-black">
                                    Movies</a></li>


                            <li class="list-group-item active"> <a href="admin-panel.php"
                                    class="text-decoration-none text-white">Users</a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col ps-md-2 pt-2">
                <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
                    class="border rounded-3 p-1 text-decoration-none"><i class="bi bi-list"></i></a>
                <div class="page-header pt-3">
                    <h2>Users Dashboard</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Sold Out Tickets</h5>
                                <p class="card-text"><i class="bi bi-ticket mr-3"></i></p>
                                <a href="#" class="btn btn-primary">See Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Movies Out</h5>
                                <p class="card-text"><i class="bi bi-film mr-3"></i></p>
                                <a href="#" class="btn btn-primary">See Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Upcoming movies</h5>
                                <p class="card-text"><i class="bi bi-people mr-3"></i>100+</p>
                                <a href="#" class="btn btn-primary">See Table</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User ID </th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                            </tr>


                            <?php 

while($row=mysqli_fetch_assoc($result))
{
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $dob = $row['dob'];
?>
                            <tr>
                                <td type="hidden" name="id">#</td>
                                <!--  <td><?//php echo $UserID ?></td>-->
                                <td><?php echo $username?></td>
                                <td><?php echo  $password?></td>
                                <td><?php echo $dob?></td>
                                <td> <a class="btn btn-primary" href="edit.php?GetID=<?php echo $id?>">Edit</a></td>
                                <td><a class="btn btn-warning" href="delete.php?Del=<?php echo $id?>">Delete</a></td>

                            </tr>

                            <?php 
}  
?>
                            <td> <a class="btn btn-success" href="add.php">Add new</a></a></td>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>