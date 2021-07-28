<?php include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $descripcion=htmlentities($_POST['descripcion']);
  $id=htmlentities($_POST['id']);




  $up=$con->prepare("UPDATE nosotros SET descripcion=? WHERE id=?");
  $up->bind_param('si',$descripcion ,$id);

 if ($up->execute()) {
    header('location:../extend/alert.php?msj=Descripcion actualizada&c=perfil&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=La descripcion no pudo ser actualizada&c=perfil&p=in&t=error');
  }
$up->close();
  $con->close();



  }else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }

 ?>
