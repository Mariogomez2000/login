<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<?php

include "php/conexion-bd.php";
include "controladores/controlador-acceso.php";

?>
    <div class="c1">
        <header>
            <div class="tex">
                Asignación de ambiente
            </div>
            <div class="logo">
                <img src="img/logo_sena.png" alt="">
            </div>
        </header>

        <form method="POST" class="datos">
            <select id="opci">
                <option value="1">Guarda de seguridad</option>
                <option value="2">Administrador</option>
                <option value="3">Usuarios</option>
            </select>
    
            <input type="text" name="usuario" placeholder="Usuario" id="opci">
    
            <input id="opci" name="contrasena" placeholder="Contraseña" type="password">
    
            <button type="submit" name="boton" id="boton">INGRESAR</button>
        </form>

    </div>


</body>


<?php
include("php/registro.php");
?>
</html>