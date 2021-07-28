<?php include '../extend/header.php'

?>

<div class="container">
  <div class="col s12">
    <br>
    <h4 align="center">Facturacion</h4>
    <br>
    <div class="row">
        <div class="col s12" >
            <div class="col s6">
            <a  href="agregarfact.php"  class="waves-effect waves-light btn-small"><i class="material-icons left">add_circle_outline</i>Nueva facturacion</a>
            </div>
             <div class="col s6">
            <a class="waves-effect waves-light btn-small"><i class="material-icons left">add_circle_outline</i>Agregar facturacion existente</a>
            </div>
          
        </div>
    </div>
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

<?php
  $nick=$_SESSION['nick'];

    $sel_ase = $con->prepare("SELECT * FROM facturacion WHERE usuario_id='$nick' ");

    $sel_ase->execute();
    $res_ase = $sel_ase->get_result();

     ?>







</div>
</div>
<div class="row">
   <div class="col s12">
     <div class="card">
       <div class="card-content">
           <table>
               <thead>
                   <tr class="cabecera">
                       <th>Inquilino</th>
                       <th>Fecha de pago</th>
                       <th>Vencimiento</th>
                       <th>Monto total</th>
                       
                   </tr>
               </thead>
               <?php while($f_ase=$res_ase->fetch_assoc()){ ?>
               <tr>
                      <td ><button data-target="modal2" onclick="enviar(this.value)"  class="btn-floating" value="<?php echo $f_ase['id'] ?>" class="btn modal-trigger"> <i class="material-icons">visibility</i> </button></td>
                   <td><?php echo $f_ase['inquilino']?></td>
                   <td><?php echo $f_ase['pago']?></td>
                   <td><?php echo $f_ase['vencimiento']?></td>
                   <?php    
                  
                   if($f_ase['iva']>0){
                       
                       $totaliva=$total*$f_ase['iva']/100;
                       $total=$total+$totaliva;
                   }else{$total= $f_ase['monto'] + $f_ase['impuestos']+$f_ase['expensas']+$f_ase['punitarios']+$f_ase['bonificacion'];}
                   ?>
                   <td><?php echo "$". number_format($total,0,',','.');  ?></td>
                      <td>
                 <a href="# " class="btn-floating red" onclick="
                 swal({
                   title:'Esta seguro que desea eliminar esta factura?',
                   text:'Al eliminarlo no podra recuperarlo!',
                   type:'warning',
                   showCancelButton:'true',
                   confirmButtonColor:'#3085d6',
                   cancelButtonColor:'#d33',
                   confirmButtonText:'Si , eliminar!'
                 }).then(function(){

                   location.href='eliminar_fact.php?id=<?php  echo $f_ase['id'] ?>';

                 })"><i class="material-icons">clear</i></a>  </td>

               </td>
                   
               </tr>
               
            <?php   }
             $sel_ase->close();
             $con->close();
             ?>
           </table>
           
    </div>
    
   </div> 

  </div>

 <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Detalles</h4>
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