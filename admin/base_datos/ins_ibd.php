<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $nombre= htmlentities($_POST['nombre']);
  $apellido=htmlentities($_POST['apellido']);
   $dni=htmlentities($_POST['dni']);

 

  $id='';
  $usuario_id=$_SESSION['nick'];

  $ins=$con->prepare("INSERT INTO inquilinosbd VALUES(?,?,?,?,?)");
  $ins->bind_param("issis",$id, $nombre, $apellido, $dni, $usuario_id);

  if($ins->execute()){
    header('location:../extend/alert.php?msj=Cliente registrado&c=bd&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=El cliente no pudo ser registrado&c=bd&p=in&t=error');
  }
  $ins->close();
  $con->close();



}else{
  header('location:../extend/alert.php?msj=Utilia el formulario&c=pro&p=in&t=error');
}

 ?>

