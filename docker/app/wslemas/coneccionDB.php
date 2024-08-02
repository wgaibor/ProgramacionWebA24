<?php

$db = mysqli_connect('mysql', 'mysql', 'mysql', 'teclemas', 3306);

if(!$db){
    echo 'Error al conectar con la base de datos <br>'; 
    echo "<br> error de depuración: " . mysqli_connect_errno();
    echo "<br>error de depuración: " . mysqli_connect_error();
    exit;
}