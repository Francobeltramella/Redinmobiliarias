<?php
include '../admin/conexion/conexion.php';

$correo =$con->real_escape_string($_POST['correo']);

$sel =$con->query("SELECT id FROM usuario WHERE correo='$correo'");
$row =mysqli_num_rows($sel);
if($row !=0){
  echo "<label style='color:red;'>El email ya existe</label>";
}else{
  echo "<label style='color:green;'>Este email esta disponible</label>";
}
$con ->close();
?>
