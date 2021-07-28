<?php include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $dias=htmlentities($_POST['dias']);
    $instagram=htmlentities($_POST['instagram']);
      $facebook=htmlentities($_POST['facebook']);
        $sitioweb=htmlentities($_POST['sitioweb']);
  $id=htmlentities($_POST['id']);




  $up=$con->prepare("UPDATE datasinmo SET dias=?,instagram=?, facebook=?,sitioweb=? WHERE id=?");
  $up->bind_param('ssssi',$dias ,$instagram,$facebook,$sitioweb,$id);

 if ($up->execute()) {
    header('location:../extend/alert.php?msj=Datos actualizados&c=perfil&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=Los datos no pudieron ser actualizados&c=perfil&p=in&t=error');
  }
$up->close();
  $con->close();



  }else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }

 ?>
