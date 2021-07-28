	<?php
include 'admin/conexion/conexion.php';
include 'header.php' ;


if(isset($_GET['ope'])){
  $operacion_paginacion=$con->real_escape_string(htmlentities($_GET['ope']));
  $sel_paginacion = $con->prepare("SELECT propiedad

    FROM inventario WHERE   marcado='SI' ");
  $sel_paginacion->bind_param('s',$operacion_paginacion);
  $ope="&ope=".$operacion_paginacion;
}else{
  $sel_paginacion = $con->prepare("SELECT propiedad
    FROM inventario WHERE marcado='SI' ");
    $ope="";
}

$sel_paginacion->execute();
$res_paginacion=$sel_paginacion->get_result();
$row =mysqli_num_rows($res_paginacion);
$numero_registros=12 ;
$total_paginas=ceil($row/$numero_registros);

if(isset($_GET['pag'])){
  $pagina=$_GET['pag'];
}else{
  $pagina=1;
}

if ($pagina==1) {
$inicio=0;  // code...
}else{
  $res=$pagina-1;
  $inicio=($numero_registros * $res);
}
?>




                                         <!-- Cover -->
<div class="section-fade-out pt-5 pb-5" style="	background-image: url(admin/img/interior-2685521.jpg);	background-position: bottom;	background-size: 100%; loading="lazy"	background-size:cover;">
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
        <h1 class="display-2 mb-2">HOGAR</h1>
        <p class="lead">Encontra el hogar que siempre estuviste buscando</p>
        <div class="row mt-5 mb-4">
          <div class="col-6 col-lg-4">
            <a href="#"></a>
          </div>
          <div class="col-6 col-lg-4">
            <a href="#"></a>
          </div>
        </div>
      </div>
                                        <!-- Buscador -->

      <div class="col-lg-6 pt-3">
        <div class="row mt-4">
          <div class="col-md-4">
           <form  action="buscar.php" method="post" autocomplete="off">
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

          <div class="col-md-4">
            <div class="form-group"><label><b><b>Operacion</b> </b> </label><input name="operaciones" class="form-control" placeholder="Operaciones" id="inlineFormInputGroup" list="operaciones"></div>
            <datalist id="operaciones">
              <?php
                $sel_op=$con->prepare("SELECT DISTINCT operacion FROM inventario WHERE marcado='SI' ");
                $sel_op->execute();
                  $sel_op->bind_result( $operacion);

                while ($sel_op->fetch()) {?>
              <option value="<?php echo $operacion ?>"></option>
            <?php }?>
           </datalist>

          </div>
          <div class="col-md-4">
            <div class="form-group"><label><b><b>Tipo Inmueble</b> </b> </label><input name="tinmueble" class="form-control" placeholder="Tipo Inmueble" id="inlineFormInputGroup" list="tinmueble" ></div>
          </div>
          <datalist id="tinmueble">
            <?php
              $sel_op=$con->prepare("SELECT DISTINCT tipo_inmueble FROM inventario WHERE marcado='SI' ");
              $sel_op->execute();
                $sel_op->bind_result( $tipo_inmueble);

              while ($sel_op->fetch()) {?>
            <option value="<?php echo $tipo_inmueble ?>"></option>
          <?php }?>
         </datalist>
        </div>
        <div class="row col-12">

          <div class="col-lg-12"><button class="btn btn-outline-light m-3 mx-auto"  type="submit" >BUSCAR<br><i class="fa fa-search fa-fw"></i> </button></div>
        </div>
             </form>
      </div>
    </div>
  </div>
</div>
      <body >

                                 <!-- Productos -->
<div class=" py-0">
  <div class="container">
    <div class="row pt-5">
      <div class="align-self-center col-lg-7 text-md-left text-center">
        <h2>Sobre Nosotros</h2>
        <p class="my-4 text-dark"><b><b>Red Inmobiliarias</b> </b>    <br> Es un sistema web encargado de UNIR a todas las inmobiliarias de Argentina proporcionandoles a todos los corredores inmobiliarias MATRICULADOS el mejor sistema administrativo para su negocio inmobiliario    </p>
        <a class="btn btn-light shadowed col-lg-4" data-toggle="modal" data-target="#exampleModal">UNIRSE</a>
      </div>
      <div class="align-self-center mt-1 col-sm-5 animate-in-right">
        <img class="img-fluid d-block mx-auto" src="admin/img/iconoprincipal.png"  > </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light text-center">
        <h5 class="modal-title" id="exampleModalLabel">UNIRSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
             <div class="form-group col-md-6"> <input type="text" class="form-control" id="nombre" placeholder="Nombre Apellido"> </div>
             <div class="form-group col-md-6"> <input type="text" class="form-control" id="correo" placeholder="Email"> </div>
           </div>
           <div class="form-group"> <input type="text" class="form-control" id="inmobiliaria" placeholder="Inmobiliaria"> </div>


           <div class="form-row">
             <div class="form-group col-md-6"> <input type="number" class="form-control" id="celular" placeholder="Celular (optional)"> </div>
             <div class="form-group col-md-6"> <input type="text" class="form-control" id="localidad" placeholder="Localidad"> </div>
           </div>
           <div class="form-group">
            <label for="exampleFormControlSelect1">POR DONDE QUIERE SER CONTACTADO</label>
             <select id="contacto" class="form-control" id="exampleFormControlSelect1">
               <option value="WHATSAPPL">WHATSAPP</option>
               <option value="EMAIL">EMAIL</option>
             </select>

           <div class="form-group">
            <label for="exampleFormControlSelect1">SELECCIONE PLAN DE INTERES</label>
             <select id="planes"  class="form-control" id="exampleFormControlSelect1">
             <option value="MENSUAL">PLAN MENSUAL: $1000 / MES</option>
             <option value="6MESES">PLAN 6 MESES: $5400 / TOTAL</option>
             <option value="ANIO">PLAN 1 AÑO: $9600 / TOTAL</option>
           </select>
         </div>
         <div class="form-group"> <input type="text" name="asunto" id="asunto" class="form-control"  placeholder="Asunto"> </div>
         <div class="form-group"> <textarea id="mensaje" class="form-control" id="form43" rows="3" placeholder="Mensaje"></textarea> </div>  <button type="button" class="btn btn-info" id="enviar">Enviar</button>
         <div class="resultado"></div>
       </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Features -->
<div class="py-5" id="features">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="pb-4"><b><b>PROPIEDADES</b> </b> </h2>
        <?php
        include 'admin/conexion/conexion.php';
         ?>

        <div class="col-12">
        <div class="row" style=" margin-right: 0px;">





          <?php
            $sel_marc=$con->prepare("SELECT foto_principal,precio,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' ORDER BY rand(marcado='SI') LIMIT $inicio,$numero_registros ");

              $sel_marc->execute();
              $sel_marc->bind_result($foto_principal,$precio,$estado,$municipio,$fraccionamiento,$propiedad,$banos,$recamaras,$cocheras,$operacion,$moneda, $tipo_inmueble,$calle_num,$vendido,$alquilado,$nick_id);
          $res=$sel_marc->get_result();
          while ($f=$res->fetch_assoc()){
          ?>


        <?php
          $nick=$f['nick_id'];

            $sel_ase = $con->prepare("SELECT correo, foto FROM usuario  WHERE nick='$nick' ");

            $sel_ase->execute();
            $res_ase = $sel_ase->get_result();
            if ($f_ase =$res_ase->fetch_assoc()) {

            }
             ?>

        <?php include 'targetas.php' ?>






          <?php }

          $con->close();
           ?>



        </div>

        </div>

        <?php
$atras = $pagina -1;
$adelante = $pagina +1;
 ?>
 <nav aria-label="Page navigation example">
   <ul class="pagination pagination-lg justify-content-center"  >
     <li class="page-item page-light"  >
       <?php if ($pagina > 1 ):  ?>
       <a class="page-link" href="index.php?pag=<?php echo $atras; echo $ope; ?>" tabindex="-1">ATRAS</a>
<?php endif; ?>
     </li>
     <?php $pag=0;
     while ($pag < $total_paginas) {
       $pag++;
       ?>
     <li class="page-item"><a class="page-link" value="<?php echo $pag ?>" href="index.php?pag=<?php echo $pag; echo $ope; ?>"><?php echo $pag ?></a></li>
  <?php } ?>
    <li class="page-item">
      <?php if ($pagina < $total_paginas ):  ?>
       <a class="page-link" href="index.php?pag=<?php echo $adelante; echo $ope; ?>">SIGUIENTE</a>
       <?php endif; ?>
     </li>
   </ul>
 </nav>
</div>
</div></div></div>
        <div class="py-2" id="features">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" >
          <h2 class="pb-4"><b>El mejor sistema para tu negocio inmobiliario</b></h2>
        </div>
      </div>
      <div class="row">
        <div class="align-self-center text-md-right text-center  col-lg-4 col-md-6">
          <h4 class="text-primary"><b>SISTEMA ADMINISTRATIVO</b></h4>
          <p class="mb-5 text-dark">Amplio sistema administrativo para gestionar tu negocio inmobiliario</p>
          <h4 class="text-primary"><b>PERFIL AUTOGESTIONABLE</b></h4>
          <p class="mb-5 text-dark">Perfil ampliamente autogestionable para agregarle toda la informacion necesaria de tu negocio</p>
          <h4 class="text-primary"><b>CRECIENDO JUNTO A VOS</b></h4>
          <p class="mb-5 text-dark">Vamos creciendo y actualizandonos con ustedes</p>
        </div>
        <div class="my-3 col-md-4 d-none d-lg-block animate-in-down">
          <img class="img-fluid d-block mx-auto" src="admin/img/cd68ce6393406633b8152b2a1db47cae.jpg" width="300"> </div>
        <div class="align-self-center text-md-left text-center col-lg-4 col-md-6">
          <h4 class="text-primary"><b>CARGA ILIMITADA DE PROPIEDADES</b></h4>
          <p class="mb-5 text-dark">Podras cargar la cantidad de propiedades que prefieras totalmente ILIMITADO</p>
          <h4 class="text-primary"><b>MULTIPLES BENEFICIOS</b></h4>
          <p class="mb-5 text-dark">Tenemos mucho beneficios , descuentos y promociones para ofrecerte </p>
          <h4 class="text-primary"><b>PUBLICIDAD EN NUESTRO INSTAGRAM Y FACEBOOK</b></h4>
          <p class="mb-5 text-dark">Promocionamos tu negocio y tus propiedades continuamente en nuestras redes para poder ampliar el rango publicitario</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white bg-dark" style="background-color:, url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;" >
     <div class="container">
       <div class="row">
         <div class="col-md-6 text-center align-self-center p-4">
           <p class="mb-5"> <strong>Buenos Aires , Argentina</strong> <br>Redinmobiliarias2020@hotmail.com<br>2284699092 <br> </p>
           <div class="row">

           </div>
         </div>
         <div class="col-md-6 p-0"> <iframe width="100%" height="350" src="https://www.google.com/maps/d/embed?mid=1a983ydReV16vp40UYxrjnr-3tYkZ8qkt"></iframe></div>
       </div>
     </div>
   </div>




  </body>
<?php include 'footer.php' ?>
<!-- JavaScript dependencies -->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <!-- Script: Smooth scrolling between anchors in the same page -->
 <script src="js/smooth-scroll.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>


$('#enviar').click(function(){
$.post('email.php',{
nombre:$('#nombre').val(),
correo:$('#correo').val(),
inmobiliaria:$('#inmobiliaria').val(),
mensaje:$('#mensaje').val(),
celular:$('#celular').val(),
localidad:$('#localidad').val(),
 contacto:$('#contacto').val(),
planes:$('#planes').val(),

asunto:$('#asunto').val(),
mensaje:$('#mensaje').val(),

id_propiedad:$('#id_propiedad').val(),
beforeSend: function(){
  $('.resultado').html("Espere un momento por favor..")

}
},function(respuesta){
$('.resultado').html(respuesta);

}
);
});

</script>
<script src="admin/js/smooth-scroll.js"></script>
</body>

</html>
