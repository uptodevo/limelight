<?php 

    require_once("server.php");

    if(isset($_POST['update']))

 {


        $id= $_GET['id'];
        $genre = $_POST['genre'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $pic= $_POST['image'];
        $stock= $_POST['stock'];
        $director= $_POST['director'];
     
        $query = "update movies set genre = '".$genre."', title='".$title."',description='".$description."', image='".$pic."', stock='".$stock."', director='".$director."' where id ='".$id."'";
        $result = mysqli_query($con,$query);
       
    

        if($result)
        {
            header("location:movies.php");
        }
        else
        {
            echo ' Please Check Your Query updates ';
        }
    
    }
?>