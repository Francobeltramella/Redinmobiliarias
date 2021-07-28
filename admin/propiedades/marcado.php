<?php
include '../conexion/conexion.php';
$id=htmlentities($_GET['id']);
$marcado=htmlentities($_GET['marcado']);

$up=$con->prepare("UPDATE inventario SET marcado=? WHERE propiedad=?");
$up->bind_param('ss',$marcado,$id);



if($marcado==''){
  $marc='desmarcado';
}else{
  $marco='marcado';
}

if($up->execute()){
  header('location:../extend/alert.php?msj=Inmueble '.$marc.' marcado&c=prop&p=in&t=success');

}else{
    header('location:../extend/alert.php?msj=Inmueble no marcado&c=prop&p=in&t=error');
}
$up->close();
$con->close();

 ?>
