<?php
require_once("server.php");

session_start();
//get film id
$id = $_GET['GetID'];

$query= "SELECT * from movies where id = $id";//change to variable
$result = mysqli_query($con,$query);//changed to $row instead of $result
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


$number_ticket = $row['stock'];
$stock=$_POST['stock'];

$day = $row['day'];
$day = $_POST['day'];

$time = $row['time'];
$time = $_POST['time'];



   
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

    <title>booking</title>
</head>



<body class="bg-grey">


    <div class="container">

        <div class="container py-3">

            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-primary text-white text-center py-3">Movie selected</h3>
                    </div>
                    <div class="card-body">
                        <form action="booked.php" method="post">

                            <?php

echo "Tickets left: " . $row ['stock'];
?>
                            <hr>
                            <label class="form-label">Enter number of tickets</label>
                            <input class="form-control mb-2" name="stock" class="form-control" required>

                            <select class="form-control mb-2" name="time" type="time" placeholder="time" Required>">
                                <option value="">Time Available:</option>
                                <option value="16:30">16:30</option>
                                <option value="20:10">20:10</option>
                                <option value="22:15">22:15</option>

                            </select>
                            <select class="form-control mb-2" name="day" type="day" placeholder="day" Required>">
                                <option value="">Select day:</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>

                            </select>

                            <!-- added a hidden form element -->
                            <input type="hidden" id="custId" name="id" value="<?php echo($row['id']); ?>">


                            <p class="container-text" style="font-size: 25px;">


                            </p>

                            <img style='height:130px;  width:120px' src='admin/images/<?php echo $row ['image']; ?>'
                                alt='<?php echo $row ['image']; ?>'>
                            <br>
                            <p>Title: <?php echo $row ['title']; ?></p>
                            <p>Genre: <?php echo $row ['genre']; ?></p>


                            <button class="btn btn-primary" type="submit" name="book">book</button>


                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>