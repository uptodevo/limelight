<?php
require_once("server.php");

session_start();
//assign stock and id variables
$stock=$_POST['stock'];
$id = $_POST['id'];



//get stock from database of selected movie
$query= "SELECT * from movies where id = $id";//change to variable
$result = mysqli_query($con,$query);//changed to $row instead of $result
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$number_ticket = $row['stock'];
$stock=$_POST['stock'];



$ticket_left = $number_ticket - $stock;

if($stock <= $number_ticket)
    {
        //header ('Location:booked.php');
		//echo "you successfully booked"; 

        $query = "update movies set stock= '".$ticket_left."' where id ='".$id."'";

        mysqli_query($con,$query);

    }


    
$query= "SELECT * from movies where id = $id";//change to variable
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);



$number_ticket = $row['stock'];
$stock=$_POST['stock'];


$day = $row['day'];
$day=$_POST['day'];

$time = $row['time'];
$time= $_POST['time'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank you</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="sticky-top">

        <div class="container py-3">
            <a class="btn btn-primary" href="index.php">Go back</a>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"
                aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>
    </div>




    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div>
            <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor"
                    class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
            </div>

            <div class="text-center">

                <h1>Thank You!</h1>
                <p>You have successfully booked for the movie: <?php echo $row ['title'];  ?> on
                    <?php echo $day; ?>
                    at <?php echo $time; ?></p>

                <img style='height:130px;  width:120px' src='admin/images/<?php echo $row ['image']; ?>'
                    alt='<?php echo $row ['image']; ?>'>
                <p><?php echo $row ['title']; ?></p>

                <button onClick="window.print()" class="btn btn-success">Print Ticket</button>


            </div>

        </div>



</body>


</html>