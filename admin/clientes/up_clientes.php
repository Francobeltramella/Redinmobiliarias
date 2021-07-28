<?php include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $nombre= htmlentities($_POST['nombre']);
  $apellido=htmlentities($_POST['apellido']);
 $locacion=htmlentities($_POST['locacion']);
  $telefono=htmlentities($_POST['telefono']);
  $correo=htmlentities($_POST['correo']);
  
  $id=htmlentities($_POST['id']);

  $up=$con->prepare("UPDATE clientes SET nombre=?,apellido=?, locacion=?, telefono=?, correo=? WHERE id=?");
  $up->bind_param('sssssi',$nombre,$apellido, $locacion, $telefono,$correo, $id );

  if($up->execute()){
    
    header('location:../extend/alert.php?msj=Cliente actualizado&c=cli&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=El cliente no pudo ser actualizado&c=cli&p=in&t=error');
  }
$up->close();
  $con->close();



  }else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }

 ?>
