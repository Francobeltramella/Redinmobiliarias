<?php
include '../conexion/conexion.php';
$id=htmlentities($_GET['id']);

$del=$con->prepare("DELETE FROM inquilinos WHERE id= ?");
$del->bind_param('i',$id);

if($del->execute()){
    header('location:../extend/alert.php?msj=Inquilino eliminado&c=inqui&p=in&t=success');
}else{
    header('location:../extend/alert.php?msj=Inquilino no eliminado&c=inqui&p=in&t=error');
}
$del->close();
$con->close();

 ?>
