<?php include '../extend/header.php';?>


<h2 align="center">ALTA BASE DATOS INQUILINOS</h2>

<br>
<br>

  <div class="col-sm-12">
    <div class="card">
      <div class="card-content">
        <h5 align="center"><b>DATOS GENERALES</b></h5>
        <p align="center"><br> Solo agregar nombre, apellido, DNI Y guardar (ENTER)</p>
        <form  action="ins_bd.php" method="post" autocomplete="off" >
           <div class="row">
             <div class="col-sm-12">
                <label for="nombre">Nombre</label>
               <input type="text" name="nombre"    id="nombre"    >


             </div>
             <div class="col-sm-12">
               <label for="apellido">Apellido</label>
               <input type="text" name="apellido" id="apellido"  >


             </div>
             <div class="col-sm-12">
               <label for="dni">DNI</label>
               <input type="number" name="dni"   id="dni"   >


             </div>
             <p>Fecha de Registro de datos:</p>
              <div class="input-field ">
              <input type="date" name="fecha"   readonly="readonly"  id="fecha">
              <label for=""></label>
              </div>
             <br>
             <div class="row">
<div class="col-sm-12">
    <select class="estado"  readonly="readonly"   name="estado"  >
      <option value="" >ESTADO CIVIL</option>
      <option value="CASADO/A">CASADO/A</option>
      <option value="SOLTERO/A">SOLTERO/A</option>
    </select>
    </div>
     <div class="col-sm-12">
               <label for="pareja">ESPOSO/A</label>
               <input type="text" name="pareja"    readonly="readonly" id="pareja"  >


             </div>

            <div class="col-sm-6">


    <select class="pago"   readonly="readonly" name="pago" >
         <option value="" >PAGO A TERMINO</option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
       </select>
  </div>
  <div class="col-sm-6">
    <select class="contrato" readonly="readonly"   name="contrato"  >
      <option value="" >CONTRATO A TERMINO</option>
      <option value="SI">SI</option>
      <option value="NO">NO</option>
    </select>

  </div>
  <div class="col-sm-6">
    <select class="inmueble"  readonly="readonly"   name="inmueble" >
      <option value="" >CONDICION DEL INMUEBLE</option>
      <option value="BUENA">BUENA</option>
      <option value="MALA">MALA</option>
    </select>
  </div>
  <div class="col-sm-6">
    <select class="impuestos"  readonly="readonly"   name="impuestos" >
      <option value="" >IMPUESTOS DEL INMUEBLE</option>
      <option value="AL DIA">AL DIA</option>
      <option value="DEUDA">DEUDA</option>
    </select>
  </div>
  <div class="col-sm-6">
    <select class="disturbios" readonly="readonly"   name="disturbios"  >
      <option value="" >DISTURBIOS</option>
      <option value="QUEJAS"> QUEJAS</option>
      <option value="NO">NO</option>
    </select>
  </div>

</div>
</div>
<div class="row">
<div class="input-field col-sm-12">
  <textarea id="textarea2" class="materialize-textarea" type:"text" name="comentarios"  readonly="readonly" data-length="300"></textarea>
  <label for="textarea2">DATOS A AGREGAR</label>
</div>
</div>

<h5>CATEGORIAS:</h5>
<p>Segun las 3 siguientes categorias clasificar:
*(Con criterio y evaluaciones Profesionales)
<br>
<strong><h3>A</h3></strong>Si cumple con todos los requisitos para ser un buen inquilino (9-10)
<br>
<strong><h3>B</h3></strong>
Si cumple con la mayoria de los buenos items (5-8)
<br>
<strong><h3>C</h3></strong>
Si es un inquilino que cumple mayormente con los malos items del alquiler (0-4)

</p>

<br>
<div class="col-sm-6">
<select class="categoria" readonly="readonly"   name="categoria"  >
  <option value="" >SELECCIONA</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="N/A">N/A</option>
</select>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<h5>Por favor ser rigurosos y profesionales a la hora de seleccionar ,
no solo se marcaran a los malos inquilinos sino que tambien es para tener en cuenta a los buenos,
por esto mismo pedimos seriedad a la hora de la clasificacion.

</h5>
</div>

</div>

<div class="row">
<div class="col-sm-12">


<h4>GARANTIA 1</h4>
<div class="input-field col-sm-6">
<input type="text" name="nombreg1"    readonly="readonly" id="nombreg1"  >
<label for="nombreg1">Nombre</label>
</div>
<div class="input-field col-sm-6">
<input type="text" name="apellidog1"   readonly="readonly"  id="apellidog1"   >
<label for="apellidog1">Apellido/s</label>
</div>
<div class="input-field col-sm-12">
<input type="number" name="dnig1"  readonly="readonly"  id="dnig1"  >
<label for="dnig1">DNI</label>

</div>
<div class="input-field col-sm-12">
  <select class="tipogarante1" readonly="readonly"   name="tipogarante1" >
    <option value=""   >TIPO</option>
    <option value="RECIBO SUELDO">RECIBO SUELDO</option>
    <option value="PROPIETARIO">PROPIETARIO</option>

  </select>
</div>
<h4>GARANTIA 2</h4>
<div class="input-field col-sm-6">
    <input type="text" name="nombreg2"  readonly="readonly"  id="nombreg2"  >
    <label for="nombreg2">Nombre</label>
  </div>
  <div class="input-field col-sm-6">
    <input type="text" name="apellidog2"  readonly="readonly"   id="apellidog2"   >
    <label for="apellidog2">Apellido/s</label>
  </div>
  <div class="input-field col-sm-12">
    <input type="number" name="dnig2"   readonly="readonly" id="dnig2"  >
    <label for="dnig2">DNI</label>
  </div>
  <div class="input-field col-sm-12">
    <select class="tipogarante2" readonly="readonly"   name="tipogarante2" >
      <option value=""   >TIPO</option>
      <option value="RECIBO SUELDO">RECIBO SUELDO</option>
      <option value="PROPIETARIO">PROPIETARIO</option>

    </select>
  </div>
  <h4>GARANTIA 3</h4>
  <div class="input-field col-sm-6">
      <input type="text" name="nombreg3"   readonly="readonly" id="nombreg3"  >
      <label for="nombreg3">Nombre</label>
    </div>
    <div class="input-field col-sm-6">
      <input type="text" name="apellidog3"  readonly="readonly"   id="apellidog3"   >
      <label for="apellidog3">Apellido/s</label>
    </div>
    <div class="input-field col-sm-12">
      <input type="number" name="dnig3"   readonly="readonly" id="dnig3"  >
      <label for="dnig3">DNI</label>
    </div>
    <div class="input-field col-sm-12">
      <select class="tipogarante3" readonly="readonly"   name="tipogarante3">
        <option value=""  >TIPO</option>
        <option value="RECIBO SUELDO">RECIBO SUELDO</option>
        <option value="PROPIETARIO">PROPIETARIO</option>

      </select>
      <input type="text" name="iddato" id="iddato" value="<?php echo $id?>" >
    </div>
     <a class="borrar"><p data-target="modal1" onclick="enviar(this.value)"   value="<?php echo $f['id'] ?>"  title="Visor de inquilino"> Al guardar aceptan nuestras politicas de seguridad</p> <br>
    <button type="submit" class="btn" >Guardar</button>
  </form>
<?php
$sel->close();
$con->close();
?>
</div>
</div>
</div>
<?php include '../extend/scripts.php'; ?>
 <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>POLITICAS DE PRIVACIDAD</h4>
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
      $.get('politicas.php',{
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



</body>
</html>
