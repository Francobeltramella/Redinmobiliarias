<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  header('Content-type:application/vnd.ms-excel;name="excel"');
  header('Content-Disposition:filename=Reporte.xls');
  header('Pragma:no-cache');
  header('Expires:0');

  echo $_POST['datos'];



}else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=home&p=in&t=error');
  }

 ?>
