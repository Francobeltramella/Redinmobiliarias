
<?php include '../extend/header.php' ?>



  <H3 align="center"> BUSCAR INQUILINO </H3>
<h5 align="center"></h5>
<div class="row">
  <div class="col s12">
    <nav class="brown lighten-3" >
      <div class="nav-wrapper">
        <div class="input-field">
          <input type="search"   id="buscar" autocomplete="off"  >
          <label for="buscar"><i class="material-icons" >search</i></label>
          <i class="material-icons" >close</i>
        </div>
      </div>
    </nav>
  </div>
</div>
<p align="center">Agregar Datos Inquilino<td> <a href="../base_datos/agregar_bd.php" class="btn-floating green" ><i class="material-icons">add</i></a>  </td></p>
<?php
if($_SESSION['nivel']=='ADMINISTRADOR'){
  $sel=$con->prepare("SELECT * FROM basedatos WHERE iddato = '$id'");
}else{
  $sel=$con->prepare("SELECT   AND * FROM clientes WHERE asesor=? ");
  $sel->bind_param('s', $_SESSION['nombre']);
}
$sel->execute();
$res=$sel->get_result();
$row=mysqli_num_rows($res);

 ?>
 
 <div class="row">
   <div class="col s12">
     <div class="card">
       <div class="card-content">
           <span class="card-title">Inquilinos (<?php echo $row ?>)</span>
         <table>
           <thead>
             <tr class="cabecera">
               <th>Historial</th>
               <th>DNI</th>
               <th>Nombre</th>
               <th>Apellido</th>
              



             </tr>
           </thead>
           <?php while($f=$res->fetch_assoc() ){ 
           ?>
          
            
             <tr>

               <td  > <a href="historial.php?id=<?php  echo $f['id']?>" class="btn-floating green" title="Ver expedientes de inquilino"><i class="material-icons">how_to_reg</i></a></td>
               <td><?php echo $f['dni'] ?></td>
               <td><?php echo $f['nombre'] ?></td>
               <td><?php echo $f['apellido'] ?></td>
               
               
<td> <a href="anadirdato.php?id=<?php  echo $f['id']?>" class="btn-floating orange" title="Agregar expediente a inquilino"><i class="material-icons">queue</i></a> </td>




 <?php }  $sel->close(); ?>

             </tr>

            
         </table>
       </div>
      
     </div>

   </div>

 </div>
  <?php include '../extend/scripts.php';   ?>
 <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Informacion</h4>
      <div class="res_modal">

      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>


 <script>
    $('.modal').modal();

   function enviar(valor){
      $.get('modal.php',{
        id:valor,

        beforeSend: function(){
          $('.res_modal').html("Espere un momento por favor..")
        }
      },function(respuesta){
        $('.res_modal').html(respuesta);

      }
    );
    }


 </script>




 <script src="../js/validacion.js">

 </script>

</body>
</html>