<?php
include 'conexion/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$correo=$_POST['correo'];




    $sel_ase = $con->prepare("SELECT * FROM usuario  WHERE correo='$correo' ");

    $sel_ase->execute();
    $res_ase = $sel_ase->get_result();
    if ($f_ase =$res_ase->fetch_assoc()) {

    }



$mail = new PHPMailer();                              // Passing `true` enables exceptions

$mail->isMail();
$mail->SMTPDebug = 4;
$mail->setFrom('redinmobiliarias2020@hotmail.com', 'Nombre Apellido');
$mail->addAddress($correo, 'Nombre Apellido');
$mail->Subject = 'CAMBIO PASSWORD / USUARIO';
$message = '<h1>Usted a solicitado su usuario / contrasenia</h1>'.'
Hola '.$f_ase['usuario'].'su usuario es '.$f_ase['nick'].'
 Si quiere cambiar su contraseña
 Por favor deirigirse al siguiente link para cambiar tu contrasenia <br>
 https://redinmobiliarias.com.ar/admin/cambiopass.php?correo='.$correo.'&pass='.$f_ase['pass'];
$mail->msgHTML($message);
if ($mail->send()) {
  header("Location: http://www.redinmobiliarias.com.ar/admin/mensajemail.php");
} else {
  echo "ERROR AL ENVIAR MENSAJE";
}
 ?>
