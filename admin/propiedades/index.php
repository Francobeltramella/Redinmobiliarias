<?php include '../extend/header.php';
$id=$_SESSION['nick'];

if(isset($_GET['ope'])){
  $operacion=$con->real_escape_string(htmlentities($_GET['ope']));
  $sel = $con->prepare("SELECT propiedad ,
    consecutivo,nombre_cliente,calle_num,fraccionamiento,estado,municipio,precio,forma_pago,asesor,tipo_inmueble,operacion,mapa,marcado, moneda,vendido,alquilado
    FROM inventario WHERE estatus ='ACTIVO' AND operacion = ? AND nick_id='$id' ORDER BY calle_num");
  $sel->bind_param('s',$operacion);
}else{
  $sel = $con->prepare("SELECT propiedad ,
    consecutivo,nombre_cliente,calle_num,fraccionamiento,estado,municipio,precio,forma_pago,asesor,tipo_inmueble,operacion,mapa,marcado, moneda, vendido, alquilado FROM inventario WHERE estatus ='ACTIVO' AND nick_id='$id' ORDER BY calle_num ");
}

?>
<br>
<div class="row">
  <div class="col s12">
    <nav class="brown lighten-3">
      <div class="nav-wrapper">
        <div class="input-field">
          <input type="search" id="buscar" autocomplete="off">
          <label for="buscar"> <i class="material-icons">search</i> </label>
          <i class="material-icons">close</i>

        </div>

      </div>

    </nav>

  </div>

</div>








<div class="row">
  <div class="col s16">
    <div class="card">
      <div class="card-content">
        <form  action="excel.php" method="post" target="_blank" id="exportar" >


        <span class="card-title">Propiedades

          <input type="hidden" name="datos" id="datos">

        </span>
      </form>
        <table class="excel" border="1">
          <thead>
            <tr class="cabecera">
              <th>Vista</th>
              <th class="borrar">PUBLICO</th>
              <th class="borrar">VENDIDO</th>
              <th class="borrar">ALQUILADO</th>

              <th>Propiedad</th>
              <th>Precio</th>
              <th>Asesor</th>
              <th>Tipo</th>
              <th>Operacion</th>
              <th colspan="5" class="borrar"> Opciones</th>
            </tr>
          </thead>
          <?php

          $sel->execute();
          $res = $sel->get_result();
          while ($f =$res->fetch_assoc()) {?>
            <tr>
              <td ><button data-target="modal1" onclick="enviar(this.value)"  class="btn-floating" value="<?php echo $f['propiedad'] ?>" class="btn modal-trigger" title="Visor de propiedad"> <i class="material-icons">visibility</i> </button></td>
              <td  >
                <?php if ($f['marcado']==''): ?>
                <a href="marcado.php?id=<?php  echo $f['propiedad'] ?>&marcado=SI" title="Mostrar propiedad publico">
              <i class="small gray-text material-icons">grade</i>  </a>
            <?php else: ?>
              <a href="marcado.php?id=<?php  echo $f['propiedad'] ?>&marcado=">
            <i class="small green-text material-icons">grade</i>  </a>

              <?php endif; ?>


              </td>
                <td >
                <?php if ($f['vendido']==''): ?>
                <a href="vendido.php?id=<?php  echo $f['propiedad'] ?>&vendido=VENDIDO" >


              <i class="small grey-text material-icons">check_circle</i>  </a>
            <?php else: ?>
              <a href="vendido.php?id=<?php  echo $f['propiedad'] ?>&vendido=">


            <i class="small green-text material-icons">check_circle</i>  </a>

              <?php endif; ?>


              </td>
                <td>
                <?php if ($f['alquilado']==''): ?>
                <a href="alquilado.php?id=<?php  echo $f['propiedad'] ?>&alquilado=ALQUILADO" >


              <i class="small grey-text material-icons">check_circle</i>  </a>
            <?php else: ?>
              <a href="alquilado.php?id=<?php  echo $f['propiedad'] ?>&alquilado=">


            <i class="small blue-text material-icons">check_circle</i>  </a>

              <?php endif; ?>


              </td>

              <td><?php echo $f['calle_num'].' '.$f['fraccionamiento'].' '.$f['estado'].' ,'.$f['municipio'] ?></td>
              <td><?php echo $moneda. number_format($f['precio'], 0, ',', '.'); ?></td>
              <td><?php echo $f['asesor'] ?></td>
              <td><?php echo $f['tipo_inmueble'] ?></td>
              <td><?php echo $f['operacion'] ?></td>
                          <td  class="borrar" > <a href="vistaprevia.php?id=<?php echo $f['propiedad'] ?>" class="btn-floating orange" ><i class="material-icons">visibility</i> </a> </td>


              <td > <a href="imagenes.php?id=<?php echo $f['propiedad'] ?>" class="btn-floating pink" title="Subir imagenes propiedad" > <i class="material-icons">image</i> </a> </td>

              <td class="borrar"> <a href="pdf.php?id=<?php echo $f['propiedad'] ?>" class="btn-floating green" title="Crear PDF propiedad"> <i class="material-icons">picture_as_pdf</i> </a> </td>
              <td class="borrar"> <a href="editar_propiedad.php?id=<?php echo $f['propiedad'] ?>" class="btn-floating blue" title="Editar propiedad"> <i class="material-icons">loop</i> </a> </td>
              <td class="borrar"><a href="# " class="btn-floating red" onclick="
              swal({
                title:'Esta seguro que desea cancelar la propiedad?',

                type:'warning',
                showCancelButton:'true',
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Si , cancelar!'
              }).then(function(){

                location.href='cancelar_propiedad.php?id=<?php  echo $f['propiedad'] ?>&accion=CANCELADO';

              })" title="Cancelar propiedad"><i class="material-icons">delete</i></a></td>




            </tr>
          <?php }
          $sel->close();
          $con->close();
           ?>
        </table>
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
<script>
$('.botonExcel').click(function(){
  $('.borrar').remove();
  $('#datos').val($("<div>").append($('.excel').eq(0).clone()).html());
  $('#exportar').submit();
  setInterval(function(){location.reload();},3000);
});

</script>
</body>
</html>
