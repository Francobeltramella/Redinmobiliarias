<?php
include '../conexion/conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  $nick=$_SESSION['nick'];
  $pass1=$con->real_escape_string(htmlentities($_POST['pass1']));
  $pass=sha1($pass1);

 $up=$con->query("UPDATE usuario SET pass='$pass' WHERE nick='$nick'");

if($up){

    header('location:../extend/alert.php?msj=Password actualizada&c=home&p=in&t=success');
}else {
  header('location:../extend/alert.php?msj=Password no actualizada&c=home&p=in&t=error');
}
$con->close();


}else{
    header('location:../extend/alert.php?msj=Nivel actualizado&c=home&p=in&t=success');
}


 ?>
