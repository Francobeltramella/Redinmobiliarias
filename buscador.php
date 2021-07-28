<?php include 'admin/conexion/conexion.php'; ?>

<div class="text-center py-0 bg-light" style="background-image: linear-gradient(to left bottom, rgba(189, 195, 199, 0.75), rgba(44, 62, 80, 0.75)); background-size: 100%;">

     <div class="container">
       <div class="mx-auto col-md-12 p-0">
         <h1 class="mb-0"><i class="fa fa-home fa-fw"></i>&nbsp;BUSCADOR DE PROPIEDADES</h1>
           <form  action="buscar.php" method="post">
         <div class="row">
           <div class="col-md-3">

             <div class="form-group "  ><label>PROVINCIA</label><input  id="estado" name="estado" list="estados"   class=" col-sm-12 custom-select custom-select-sm"></div>


                <?php $sel_muni=$con->prepare("SELECT estado FROM estados ");

                $sel_muni->execute();
                  $sel_muni->bind_result( $estado);

                while ($sel_muni->fetch()) {?>
            <datalist id="estados">



              <option id="estado" name="estado" value="<?php echo $estado ?>" ></option>

              <?php }


              ?>

</datalist>


           </div>
           <div class="col-md-3">

             <div class="form-group"><label>CIUDAD</label><input name="municipio"   list="ciudades" value="" class=" col-sm-12 custom-select custom-select-sm"></div>


                <?php $sel_muni=$con->prepare("SELECT municipio FROM municipios ");

                $sel_muni->execute();
                  $sel_muni->bind_result( $municipio);

                while ($sel_muni->fetch()) {?>
            <datalist id="ciudades" >



              <option value="<?php echo $municipio ?>" ></option>

              <?php }


              ?>

</datalist>


           </div>



           <div class="col-md-3">
             <div class="form-group" name="operacion"><label>OPERACION</label><input   list="operacion" name="operacion" class=" col-sm-12 custom-select custom-select-sm"></div>
             <datalist id="operacion">
               <option value="" disabled selected  >ELIGE LA OPERACION</option>
               <option value="VENTA">VENTA</option>
               <option value="ALQUILER">ALQUILER</option>
               <option value="ALQUILER TEMPORARIO">ALQUILER TEMPORARIO</option>

             </datalist>


           </div>
           <div class="col-md-3">
             <div class="form-group"  name="tipo_inmueble" id="tipo_inmueble" ><label>TIPO DE INMUEBLE</label><input  name="tipo_inmueble" id="tipo_inmueble" list="inmueble" value="" class=" col-sm-12 custom-select custom-select-sm"></div>
             <datalist id="inmueble">
               <option value=""   >ELIGE EL TIPO DE INMUEBLE</option>
                          <option value="CASA">CASA</option>
              <option value="TERRENO">TERRENO</option>
              <option value="LOCAL">LOCAL</option>
              <option value="DEPARTAMENTO">DEPARTAMENTO</option>
              <option value="CAMPO">CAMPO</option>
              <option value="QUINTA">QUINTA</option>
              <option value="LLAVE DE NEGOCIO">LLAVE DE NEGOCIO</option>
              <option value="DEPARTAMENTOS AL POZO">DEPARTAMENTOS AL POZO</option>
              <option value="FONDOS DE COMERCIO" >FONDO DE COMERCIO</option>
              <option value="CAMPO" >CAMPO</option>
              <option value="COCHERA">COCHERA</option>
              <option value="GALPON">GALPON</option>
              <option value="OFICINA">OFICINA</option>
              <option value="POSADA">POSADA</option>
              <option value="HOTEL">HOTEL</option>

             </datalist>
           </div>
         </div>
         <div class="row">

           <div class="col-md-4">
             <div class="form-group"><label>PRECIO MINIMO</label><input name="rango1" id="rango1" type="number" class="form-control" id="rango1" placeholder="MIN"></div>
            </div>
            <div class="col-md-4">
              <div class="form-group"><label>PRECIO MAXIMO</label><input name="rango2" id="rango2" type="number" class="form-control" id="rango2" placeholder="MAX"></div>
             </div>
           <button type="submit "  class="btn btn-info  ml-auto mb-2"style="float: right;width:60px; height:60px; border-radius: 50px;"><i class="fa fa-search fa-fw fa-1x " style=""></i></button>
         </div>
       </form>
</div>
</div>
</div>
