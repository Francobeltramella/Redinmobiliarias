<?php
include 'conexion/conexion.php';

if(isset($_GET['correo']) && !empty($_GET['correo']) AND isset($_GET['pass'])  && !empty($_GET['pass'])){
   $correo =  $con->escape_string($_GET['correo']); 
   $pass = $con->escape_string($_GET['pass']); 

   $result = $con->query("SELECT * FROM usuario WHERE correo= '$correo' AND pass='$pass'");

   if($result->num_rows == 0){
   		$_SESSION['message'] = "Has ingresado a una URL invalida para cambiar contraseña!";
        
   }
}

 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="css/materialize.min.css">
<link  href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
 <body>
   <main>
     <div class="row">
       <div class="input-field s12 center">
        <a title="Inicio" href="https://www.redinmobiliarias.com.ar"><img src="img/principal.png" width="300"></a>

       </div>

     </div>
     <div class="container"   >
       <div class="row">
         <div class="col s12">
           <div class="card z-depth-5 ">
             <div class="card-content"style="background: linear-gradient(rgb(85, 147, 241), rgb(228, 236, 241), rgb(243, 179, 96));">
 		         <form action="resetpass.php" method="post">
 		             <br> 
 		         <p>IMPORTANTE : LA CONTRASEÑA DEBE TENER ENTRE 8 Y 15 CARACTERES</p>
 		             
 	          <div class="input-field">
 	            <input type="password" class="form-control"  id="pass1" name="pass1" placeholder = "Nueva contraseña" required/>
 	         
 	          </div>
 	          <br/>
 	          <div class="input-field">
 	            <input type="password" class="form-control" id="pass2" name="pass2" placeholder = "Confirmar tu nueva contraseña" required/>
 	          </div>

 	          <input type="hidden" name="correo" value="<?=  $correo ?>">
 	          <input type="hidden" name="pass" value="<?= $pass ?>">  <br/>
 	          
 	          <div class="input-field center">
               <button type="submit" id="btn_guardar"  class="btn waves-effect waves-light">Cambiar</button>
               </div>

 	        

           </form>

 	</div>
 	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="js/materialize.min.js"></script>
 	
 
<?php include 'extend/scripts.php';   ?>
<script>
    $('#pass2').change(function(event){
if($('#pass1').val()==$('#pass2').val()){
  swal('Bien echo...', 'Las contraseñas coinciden', 'success');
$('#btn_guardar').show();
}else{
  swal('Oppss...', 'Las contraseñas no coinciden', 'error');
  $('#btn_guardar').hide();
}
});
    
    
</script>
 </body>
 </html>
