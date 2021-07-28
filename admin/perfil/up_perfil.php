<?php
include '../conexion/conexion.php';

if($_SERVER['REQUEST_METHOD'] =='POST'){
  $nick=$_SESSION['nick'];
  $nombre=$con->real_escape_string(htmlentities($_POST['nombre']));
  $correo=$con->real_escape_string(htmlentities($_POST['correo']));
  $telefono=$con->real_escape_string(htmlentities($_POST['telefono']));

  $up=$con->query("UPDATE usuario SET nombre='$nombre' , correo='$correo', telefono='$telefono' WHERE nick='$nick'");

  if($up){
    $_SESSION['nombre']=$nombre;
    $_SESSION['correo']=$correo;
    $_SESSION['telefono']=$telefono;
    header('location:../extend/alert.php?msj=Datos actualizados&c=pe&p=perfil&t=success');
  }else{
    header('location:../extend/alert.php?msj=Datos no  actualizados&c=pe&p=perfil&t=error');
  }


$con->close();

}else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=pe&p=perfil&t=success');
}

 ?>
