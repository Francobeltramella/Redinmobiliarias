<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $nombre= htmlentities($_POST['nombre']);
  $apellido=htmlentities($_POST['apellido']);
   $locacion=htmlentities($_POST['locacion']);
  $telefono=htmlentities($_POST['telefono']);
  $correo=htmlentities($_POST['correo']);
 

  $id='';
  $id_usuario=$_SESSION['nick'];

  $ins=$con->prepare("INSERT INTO clientes VALUES(?,?,?,?,?,?,?)");
  $ins->bind_param("issssss",$id, $nombre, $apellido, $locacion, $telefono,
$correo,$id_usuario);

  if($ins->execute()){
    header('location:../extend/alert.php?msj=Cliente registrado&c=cli&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=El cliente no pudo ser registrado&c=cli&p=in&t=error');
  }
  $ins->close();
  $con->close();



}else{
  header('location:../extend/alert.php?msj=Utilia el formulario&c=pro&p=in&t=error');
}

 ?>
