<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
   $id="";
 
  $sitioweb=htmlentities($_POST['sitioweb']);
  $instagram=htmlentities($_POST['instagram']);
  $facebook=htmlentities($_POST['facebook']);

  $usuario_id=$_SESSION['nick'];
$id="";
  $dias= htmlentities($_POST['dias']);

  $ins=$con->prepare("INSERT INTO datasinmo VALUES(?,?,?,?,?,?)");
  $ins->bind_param("isssss",$id,$sitioweb, $instagram, $facebook,
$usuario_id,$dias);

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
