<?php

    include("connection.php");
    $con=conectar();

    $user=$_POST['user'];
    $password=$_POST['password'];

    $sql="INSERT INTO usuarios (user, password) VALUES('$user','$password')";
    echo $sql;

    $query = mysqli_query($con,$sql);

    if($query){
        header('Location:'."http://cintia.unicordoba.edu.co/login/index.php");
    }

?>