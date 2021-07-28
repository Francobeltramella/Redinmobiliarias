<?php include '../extend/header.php';

$id=htmlentities($_GET['id']);

$sel=$con->prepare("SELECT * FROM basedatos WHERE iddato='$id' ");
$sel->bind_param('i',$id);
$sel->execute();
$res=$sel->get_result();
?>
<?php
$seli=$con->prepare("SELECT categoria FROM basedatos WHERE categoria=? AND iddato='$id'");
$seli->bind_param('s',$categoria);

?>
<div class="col-lg-12">

<div class="row">
<div class="col-sm-4 " >
<div class="card blue-grey darken-1">
<div class="card-body">
<h2 class="white-text"> <b>A</b>
</h2>
<h2 align="center" class="white-text">
<?php
$categoria="A";
$seli->execute();
$resi=$seli->get_result();
echo mysqli_num_rows($resi);
?>
</div>
</div>
</div>


<div class="col-sm-4 " >
<div class="card blue-grey darken-1">
<div class="card-content">
<h2 class="white-text"> <b>B</b>
</h2>
<h2 align="center" class="white-text">
<?php
$categoria='B';
$seli->execute();
$resb=$seli->get_result();
echo mysqli_num_rows($resb);
?>
</div>
</div>
</div>
<div class="col-sm-4 " >
<div class="card blue-grey darken-1">
<div class="card-content">
<h2 class="white-text"> <b>C</b>
</h2>
<h2 align="center" class="white-text">
<?php
$categoria="C";
$seli->execute();
$resc=$seli->get_result();
echo mysqli_num_rows($resc);
?>
</div>
</div>
</div>
<div class="col-sm-12 " >
<div class="card blue-grey darken-1">
<div class="card-content">
<h2 class="white-text"> <b>N/A</b>
</h2>
<h2 align="center" class="white-text">
<?php
$categoria="N/A";
$seli->execute();
$resc=$seli->get_result();
echo mysqli_num_rows($resc);
?>
</div>
</div>
</div>

</div>
</div>




 <div class="row">
   <div class="col-sm-12">
     <div class="card">
       <div class="card-content">




           <span class="card-title">Historial Inquilino  </span>
         <table>
           <thead>
             <tr class="cabecera">
               <th>Informacion</th>
               <th>Categoria</th>
               <th>DNI</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Fecha</th>
               <th>Estado civil</th>



             </tr>
           </thead>
           <?php while($f=$res->fetch_assoc()){




          ?>



             <tr>
                 <td class="borrar"><button data-target="modal1" onclick="enviar(this.value)"  class="btn-floating" value="<?php echo $f['id'] ?>" class="btn modal-trigger" title="Visor de inquilino"> <i class="material-icons">visibility</i> </button></td>

               <td><h3><?php echo $f['categoria'] ?></h3></td>
               <td><?php echo $f['dni'] ?></td>
               <td><?php echo $f['nombre'] ?></td>
               <td><?php echo $f['apellido'] ?></td>
               <td><?php echo $f['fecha'] ?></td>
               <td><?php echo $f['estado'] ?></td>




             </tr>
             <?php   }
             $sel->close();
             $con->close();
             ?>
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
