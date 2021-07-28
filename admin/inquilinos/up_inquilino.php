<?php include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $nombre= htmlentities($_POST['nombre']);
  $apellido=htmlentities($_POST['apellido']);
  $dni=htmlentities($_POST['dni']);
  $locacion=htmlentities($_POST['locacion']);
  $telefono=htmlentities($_POST['telefono']);
  $correo=htmlentities($_POST['correo']);
  $desde=htmlentities($_POST['desde']);
  $hasta=htmlentities($_POST['hasta']);
  $id=htmlentities($_POST['id']);

  $up=$con->prepare("UPDATE inquilinos SET nombre=?,apellido=?,dni=?, locacion=?, telefono=?, correo=?, desde=?, hasta=? WHERE id=?");
  $up->bind_param('ssisisssi',$nombre,$apellido,$dni, $locacion, $telefono,$correo,$desde,$hasta, $id );

  if($up->execute()){
   

    header('location:../extend/alert.php?msj=Inquilino actualizado&c=inqui&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=El inquilino no pudo ser actualizado&c=inqui&p=in&t=error');
  }
$up->close();
  $con->close();



  }else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }

 ?>
