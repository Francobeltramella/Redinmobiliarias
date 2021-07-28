<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $nombre= htmlentities($_POST['nombre']);
  $apellido=htmlentities($_POST['apellido']);
  $dni=htmlentities($_POST['dni']);
  $locacion=htmlentities($_POST['locacion']);
  $telefono=htmlentities($_POST['telefono']);
  $correo=htmlentities($_POST['correo']);
  $desde=htmlentities($_POST['desde']);
  $hasta=htmlentities($_POST['hasta']);
  $asesor=$_SESSION['nombre'];
  $id='';
  $id_usuario=$_SESSION['nick'];

  $ins=$con->prepare("INSERT INTO inquilinos VALUES(?,?,?,?,?,?,?,?,?,?,?)");
  $ins->bind_param("ississsssss", $id, $nombre, $apellido, $dni, $locacion, $telefono,
$correo,$desde,$hasta,$asesor,$id_usuario);

  if($ins->execute()){
    header('location:../extend/alert.php?msj=Inquilino registrado&c=inqui&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=El inquilino no pudo ser registrado&c=inqui&p=in&t=error');
  }
  $ins->close();
  $con->close();



}else{
  header('location:../extend/alert.php?msj=Utilia el formulario&c=pro&p=in&t=error');
}

 ?>
