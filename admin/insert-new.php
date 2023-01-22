<?php

    require_once("server.php");

        if(isset($_POST['submit']))
    {

        $pic = $_POST['image'];
        $genre = $_POST['genre'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stock = $_POST['stock'];
        $director = $_POST['director'];
     
        
            $query = " insert into movies (genre, title, description, image, stock, director) values('$genre','$title','$description','$pic','$stock','$director')";
            $result = mysqli_query($con,$query);



            if($result)
            {
                header("location:movies.php");
            }
            else
            {
                echo 'Please Check Your Query insert';
            }
        }
    
    else


    {
        header("location:movies.php");
    }



?>