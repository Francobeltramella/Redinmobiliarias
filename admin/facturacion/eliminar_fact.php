<?php
include '../conexion/conexion.php';
$id=htmlentities($_GET['id']);

$del=$con->prepare("DELETE FROM facturacion WHERE id= ?");
$del->bind_param('i',$id);

if($del->execute()){
    header('location:../extend/alert.php?msj=Factura eliminada&c=fac&p=in&t=success');
}else{
    header('location:../extend/alert.php?msj=Factura no eliminado&c=fac&p=in&t=error');
}
$del->close();
$con->close();

 ?>
