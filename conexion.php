<?php

function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "bdphp";
    $conect = mysqli_connect($host,$user,$pass);

    mysqli_select_db($conect,$bd);

    return $conect;

}

?>