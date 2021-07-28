<?php
include '../conexion/conexion.php';
$id=htmlentities($_GET['id']);

$del=$con->prepare("DELETE FROM comentario WHERE id= ?");
$del->bind_param('i',$id);

if($del->execute()){
    header('location:../extend/alert.php?msj=Comentario eliminado&c=home&p=in&t=success');
}else{
    header('location:../extend/alert.php?msj=Comentario no eliminado&c=home&p=in&t=error');
}
$del->close();
$con->close();

 ?>
