<?php
include 'admin/conexion/conexion_web.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  foreach($_POST as $campo => $valor){
    $variable="$" . $campo. "='" . htmlentities($valor)."';";
    eval($variable);
  }

$header="Cliente web\r\n";
$header .="A red Inmobiliaria \r\n";
$header .=  "From: {$nombre} < {$correo}> \r\n";
$header.="$nombre...$celular...$inmobiliaria...$celular...$localidad..$contacto..$planes....$asunto";
$header.="$contacto";
$header.="$planes";
$header.="$correo2";
$mail=mail("redinmobiliarias2020@hotmail.com",$asunto,$mensaje,$header);

if($mail){
  echo "<h3 style='color:green;'>Su mensaje ha sido enviado</h3>";
  }else{
  echo "<h3 style='color:red;'>Su mensaje no ha sido enviado</h3>";
  }

$con->close();
}else{
echo "<h3 style='color:red;'>Su mensaje no ha sido enviado</h3>";
}

?>
