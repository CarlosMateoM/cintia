<?php

function conectar(){

    $host="bisbz5bdtevegiq59lre-mysql.services.clever-cloud.com";
    $user="uyeags95emzhznug";
    $pass="aSh5riojFDJXDtWX8XHZ";
    $bd="bisbz5bdtevegiq59lre";

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);

    return $con;
}
?>
