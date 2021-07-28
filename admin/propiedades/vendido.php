<?php
include '../conexion/conexion.php';
$id=htmlentities($_GET['id']);
$vendido=htmlentities($_GET['vendido']);
$up=$con->prepare("UPDATE inventario SET vendido=? WHERE propiedad=?");
$up->bind_param('ss',$vendido,$id);



if($vendido==''){
  $marc='desmarcado';
}else{
  $marc='marcado';
}


if($up->execute()){
  header('location:../extend/alert.php?msj=Inmueble '.$marc.' vendido&c=prop&p=in&t=success');

}else{
    header('location:../extend/alert.php?msj=Inmueble no vendido&c=prop&p=in&t=error');
}
$up->close();
$con->close();

 ?>
