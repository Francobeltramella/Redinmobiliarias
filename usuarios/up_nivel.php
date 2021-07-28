<?php
include '../conexion/conexion.php';
include '../extend/permiso.php';



if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$con->real_escape_string(htmlentities($_POST['id']));
  $nivel=$con->real_escape_string(htmlentities($_POST['nivel']));
  $up=$con->query("UPDATE usuario SET nivel='$nivel' WHERE id='$id'");
  if($up){
    header('location:../extend/alert.php?msj=Nivel actualizado&c=us&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=El nivel del usuario no pudo ser actualizado&c=us&p=in&t=error');
  }
}else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=salir&p=salir&t=error');
}
$con->close();

 ?>
