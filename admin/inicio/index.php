<?php include_once('../extend/header.php');
$id=$_SESSION['nick'];
?>


<div class="wrapper">
<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-poll-h"></i>
					</p>
					<h3>
          <?php
          $sel=$con->prepare("SELECT propiedad FROM inventario WHERE  nick_id='$id'");
          $sel->execute();
          $res=$sel->get_result();
          echo mysqli_num_rows($res);
          ?>
          </h3>
					<p>TOTAL PRODUCTOS</p>
				</div>
			</div>
      <div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-poll-h"></i>
					</p>
					<h3>
          <?php
          $sel=$con->prepare("SELECT propiedad FROM inventario WHERE operacion=? AND nick_id='$id'");
          $sel->bind_param('s',$operacion);
          $operacion='VENTA';
          $sel->execute();
          $res_venta=$sel->get_result();
          echo mysqli_num_rows($res_venta);
          ?>
          
          </h3>
					<p>EN VENTA</p>
				</div>
			</div>

</div>

</div>

<?php
$sel=$con->prepare("SELECT propiedad FROM inventario WHERE operacion=? AND nick_id='$id'");
$sel->bind_param('s',$operacion);
?>
<div class="card-action">
  <a href="../propiedades/index.php">ver mas...</a>

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6" >
<div class="card blue-grey darken-1">
<div class="card-content">
<span class="card-title white-text"> <b>Venta</b>
</span>
<h2 align="center" class="white-text">
<?php
$operacion='VENTA';
$sel->execute();
$res_venta=$sel->get_result();
echo mysqli_num_rows($res_venta);
?>
</h2>
</div>
<div class="card-action">
  <a href="../propiedades/index.php?ope=VENTA">ver mas...</a>

</div>
</div>
</div>


<div class="col-sm-6" >
<div class="card blue-grey darken-1">
<div class="card-content">
<span class="card-title white-text"> <b>Alquiler</b>
</span>
<h2 align="center" class="white-text">
<?php
$operacion='ALQUILER';
$sel->execute();
$res_renta=$sel->get_result();
echo mysqli_num_rows($res_renta);
?>
</h2>
</div>
<div class="card-action">
  <a href="../propiedades/index.php?ope=ALQUILER">ver mas...</a>

</div>
</div>
</div>
</div>

<div class="row">
  <div class="col-sm-12">

    <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <h2 align="center"> <b>Comentarios</b> </h2>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width tabs-transparent">
        <li class="tab"><a class="active" href="#nuevo">Nuevos</a></li>
        <li class="tab"><a class="active" href="#resueltos">Resueltos</a></li>

      </ul>
    </div>
    <div class="card-content white">
      <div id="nuevo">
      <table>
           <th>Vista</th>
           <th>Solicitante</th>
           <th>Telefono</th>
           <th>Correo</th>
           <th>Mensaje</th>
           <?php

           $sel_com = $con->prepare("SELECT * FROM comentario WHERE status = ? AND id_usuario='$id' ");
           $sel_com->bind_param('s', $status);
           $status = 'NUEVO';
           $sel_com->execute();
           $res_nuevo = $sel_com->get_result();
           while ($fn =$res_nuevo->fetch_assoc()) { ?>
           <tr>
             <td class="borrar"><button data-target="modal1" onclick="enviar(this.value)"  class="btn-floating" value="<?php echo $fn['id_propiedad'] ?>" class="btn modal-trigger"> <i class="material-icons">visibility</i> </button></td>
             <td><?php echo $fn['nombre'] ?></td>
             <td><?php echo $fn['tel'] ?></td>
             <td><a href="correo.php?correo=<?php echo $fn['correo'] ?>&nombre=<?php echo $fn['nombre'] ?>&id_mensaje=<?php echo $fn['id']  ?>"><?php echo $fn['correo'] ?></a> </td>
             <td><?php echo $fn['mensaje'] ?></td>
              <td>
               <a href="# " class="btn-floating red" onclick="
               swal({
                 title:'Esta seguro que desea eliminarel comentario?',
                 text:'Al eliminarlo no podra recuperarlo!',
                 type:'warning',
                 showCancelButton:'true',
                 confirmButtonColor:'#3085d6',
                 cancelButtonColor:'#d33',
                 confirmButtonText:'Si , eliminar!'
               }).then(function(){

                 location.href='eliminarcom.php?id=<?php  echo $fn['id'] ?>';

               })"><i class="material-icons">clear</i></a>  </td>
           </tr>
           <?php } ?>

         </table>
</div>



      <div id="resueltos">Resueltos...



      </div>

    </div>
  </div>

  </div>

</div>


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


<?php include '../extend/scripts.php'; ?>
<script>
   $('.modal').modal();

  function enviar(valor){
     $.get('../propiedades/modal.php',{
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
