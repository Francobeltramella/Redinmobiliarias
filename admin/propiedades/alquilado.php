<?php
include '../conexion/conexion.php';
$id=htmlentities($_GET['id']);
$alquilado=htmlentities($_GET['alquilado']);
$up=$con->prepare("UPDATE inventario SET alquilado=? WHERE propiedad=?");
$up->bind_param('ss',$alquilado,$id);



if($alquilado==''){
  $marc='desmarcado';
}else{
  $marc='marcado';
}


if($up->execute()){
  header('location:../extend/alert.php?msj=Inmueble '.$marc.' Alquilado&c=prop&p=in&t=success');

}else{
    header('location:../extend/alert.php?msj=Inmueble no Alquiado&c=prop&p=in&t=error');
}
$up->close();
$con->close();

 ?>
