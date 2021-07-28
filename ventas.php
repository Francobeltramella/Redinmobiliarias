<?php include 'header.php';
include 'admin/conexion/conexion.php';

 ?>
 <div class="section-fade-out pt-5 pb-5" style="	background-image: url(admin/img/hola.jpg);	background-position: bottom;	background-size: 100%;	background-size:cover; ">
   <div class="container mt-5 pt-5">
     <div class="row">
       <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
         <h1 class="display-2 mb-2">VENTAS <br> <br> </h1>
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

       <div class="col-md-6 mt-5">
         <form class="form-group " action="buscarlocalidad.php" method="post">
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



 <div class="py-5" id="features">
   <div class="container">
     <div class="row">
       <div class="col-12 text-center">
         <h2 class="pb-4"><b><b>VENTAS</b> </b> </h2>
         <?php
         include 'admin/conexion/conexion.php';
          ?>

         <div class="col-12">
         <div class="row" style=" margin-right: 0px;">
           <?php
             $sel_marc=$con->prepare("SELECT foto_principal,precio,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND operacion='VENTA' ORDER BY rand(marcado='SI')");
             $sel_marc->execute();
            $sel_marc->bind_result($foto_principal,$precio,$estado,$municipio,$fraccionamiento,$propiedad,$banos,$recamaras,$cocheras,$operacion,$moneda, $tipo_inmueble,$calle_num,$vendido,$alquilado,$nick_id);
             $res=$sel_marc->get_result();
            while ($f=$res->fetch_assoc()){
           ?><?php
           $nick=$f['nick_id'];
           $sel_ase = $con->prepare("SELECT correo, foto FROM usuario  WHERE nick='$nick' ");
           $sel_ase->execute();
           $res_ase = $sel_ase->get_result();
           if ($f_ase =$res_ase->fetch_assoc()) { }
          ?>


         <?php include 'targetas.php' ?>
         <?php }
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
