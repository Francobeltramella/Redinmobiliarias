<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
   $id="";
 
  $descripcion=htmlentities($_POST['descripcion']);
  
  $usuario_id=$_SESSION['nick'];


  $ins=$con->prepare("INSERT INTO nosotros VALUES(?,?,?)");
  $ins->bind_param("iss",$id,$descripcion,$usuario_id);

  if($ins->execute()){
    header('location:../extend/alert.php?msj=Datos registrados&c=perfil&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=Los datos no puieron ser registrados&c=perfil&p=in&t=error');
  }
  $ins->close();
  $con->close();



}else{
  header('location:../extend/alert.php?msj=Utilia el formulario&c=pro&p=in&t=error');
}

 ?>
