<?php

$conexion=new mysqli("localhost","root","","ambientes");

if($conexion->connect_error){
    die("error de conexcion". $conexion->connect_error);
}

?>