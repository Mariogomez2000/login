<?php

include "php/conexion-bd.php";

if(isset($_POST["boton"])){
  if(empty($_POST["usuario"]) and isset($_POST["usuario"])){
    echo '<script type="text/javascript">
              Swal.fire({
                  icon: "error",
                  title: "Los campos estan vacios",
                  text: "Ingresa tu usuario de nuevo",
                  footer: ""
              });
              </script>';
            }
            elseif (empty($_POST["contrasena"]) and isset($_POST["contrasena"])) {
              echo '<script type="text/javascript">
              Swal.fire({
                  icon: "error",
                  title: "Los campos estan vacios",
                  text: "Ingresa tu contraseña de nuevo",
                  footer: ""
              });
              </script>';
            }
            else{
$usuario=$_POST["usuario"];
$contraseña=$_POST["contrasena"];
$consulta = "SELECT usuario, contrasena FROM usuarios WHERE usuario ='$usuario' AND contrasena='$contraseña' ";
  $resultado = mysqli_query($conexion, $consulta);
      if(mysqli_num_rows($resultado) == 0){ 
        $sql= "SELECT id FROM clientes WHERE usuario='$usuario'";
        $resultados= mysqli_query($conexion, $sql);
        if(mysqli_num_rows($resultados) == 0){
          echo '<script type="text/javascript">
          Swal.fire({
              icon: "error",
              title: "USUARIO NO EXISTE",
              text: "Verifica Tus Datos",
              footer: "",
          });
          </script>';
        }
    else{
      echo '<script type="text/javascript">
              Swal.fire({
                  icon: "error",
                  title: "CONTRASEÑA INCORRECTA",
                  text: "Verifica Tus Datos",
                  footer: ""
              });
          </script>';
          
          } 
        }else{
            $fila= mysqli_fetch_assoc($resultado);
            $_SESSION["id"] = $fila["idclientes"];
            echo"<script>window.location.href='pagina-principal.php'; </script>";
            exit();
          }
}
}

?>