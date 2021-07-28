<?php
include 'conexion/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	     
	     $pass1=$con->real_escape_string(htmlentities($_POST['pass1']));

	     $correo = $con->escape_string($_POST['correo']);
		$pass = $con->escape_string($_POST['pass']);
        echo $nuevo;
      $contra= strlen($pass1);
        if($contra < 8 || $contra > 15){
  header('location:extend/alert.php?msj=La contraseña debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
    exit;
      }
     $pass1=sha1($pass1); 
        $up=$con->query("UPDATE usuario SET pass='$pass1' WHERE correo='$correo'");
  if($up){
    header('location:../extend/alert.php?msj=Password actualizada&c=salir&p=salir&t=success');
  }else{
    header('location:../extend/alert.php?msj=Password no pudo ser actualizada&c=salir&p=salir&t=error');
  }
}else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=salir&p=salir&t=error');
}
$con->close();

        
        


?>

