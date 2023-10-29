<?php

function conectar(){

    $host="";
    $user="";
    $pass="";
    $bd="";

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);

    return $con;
}
?>
