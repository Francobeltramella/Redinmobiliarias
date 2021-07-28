<?php include 'header.php';
include 'admin/conexion/conexion.php';

 ?>
 <div class="section-fade-out pt-5 pb-5" style="	background-image: url(admin/img/alquiler.jpg);	background-position: bottom;	background-size: 100%;	background-size:cover;">
   <div class="container mt-5 pt-5">
     <div class="row">
       <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
         <h1 class="display-5 mb-3"> INMOBILIARIAS </h1><br><br><br>
         <p class="lead"></p>
         <div class="row mt-5 mb-4">
           <div class="col-6 col-lg-4">
             <a href="#"></a>
           </div>
           <div class="col-6 col-lg-4">
             <a href="#"></a>
           </div>
         </div>
       </div>
       <div class="col-md-6 mt-5 ">
         <form class="form-group " action="buscarlocalidadinmo.php" method="post">
         <div class="form-group"><label><b><b>Localidad</b></b></label><input name="municipio"   list="ciudades" value="" class="form-control" id="inlineFormInputGroup" placeholder=" Buscar por localidad"></div>
         <?php $sel_muni=$con->prepare("SELECT municipio FROM municipios ");
           $sel_muni->execute();
           $sel_muni->bind_result( $municipio);
           while ($sel_muni->fetch()) {?>
           <datalist id="ciudades" >
           <option value="<?php echo $municipio ?>" ></option>
           <?php }?>
           </datalist>
          </div>
        </form>
      </div>
   </div>
 </div>



 <div class="py-4" id="features">
   <div class="container">
     <div class="row">
       <div class="col-12 text-center">
         <h2 class="pb-4"><b><b>INMOBILIARIAS</b> </b> </h2>
         <div class="col-12">
           <div class="row" style=" margin-right: 0px;">
             <?php
             $sel_inmobiliaria=$con->prepare("SELECT id, foto , correo, nombre ,telefono ,estado ,municipio FROM usuario WHERE nick != 'redinmobiliaria' ORDER BY rand(nick) ");
             $sel_inmobiliaria->execute();
             $res_inmobiliaria=$sel_inmobiliaria->get_result();
             while ($f_inmobiliaria=$res_inmobiliaria->fetch_assoc()) {?>

               <div class="col-md-4 mt-3 mb-3">
                 <div class="card ">
                   <a href="vermasinmo.php?id=<?php echo $f_inmobiliaria['id'] ?>">
                     <img class="card-img-top" src="usuarios/<?php echo $f_inmobiliaria['foto'] ?>" style="width="100" height="200"">
                   </a>
                 </div>
               </div>
             <?php }
             $sel_inmobiliaria->close();
             $con->close();
             ?>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- JavaScript dependencies -->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <!-- Script: Smooth scrolling between anchors in the same page -->
 <script src="admin/js/smooth-scroll.js"></script>


<?php include 'footer.php'?>
