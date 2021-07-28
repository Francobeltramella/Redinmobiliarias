<?php include '../extend/header.php';

$id=htmlentities($_GET['id']);

$sel=$con->prepare("SELECT * FROM basedatos WHERE id= ?");
$sel->bind_param('i',$id);
$sel->execute();
$res=$sel->get_result();

if($f=$res->fetch_assoc()){}


 ?>

<h2 align="center">ALTA BASE DATOS INQUILINOS</h2>

<br>
<br>

  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <h5 align="center"><b>DATOS GENERALES</b></h5>
        <form class="form" action="up.php" method="post" autocomplete="off" >
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
    
           <div class="row">
             <div class="col s12">
                <label for="nombre">Nombre</label>

               <input type="text" name="nombre"   value="<?php echo $f['nombre'] ?>"   >


             </div>
             <div class="col s12">
               <label for="apellido">Apellido</label>
               <input type="text" name="apellido" value="<?php echo $f['apellido'] ?>"  >


             </div>
             <div class="col s12">
               <label for="dni">DNI</label>
               <input type="number" name="dni"  value="<?php echo $f['dni'] ?>"    >


             </div>
             <p>Fecha de Registro de datos:</p>
              <div class="input-field ">
              <input type="date" name="fecha"    id="fecha">
              <label for=""></label>
              </div>
             <br>
             <div class="row">
<div class="col s12">
    <select class="estado" name="estado"  >
      <option value="" >ESTADO CIVIL</option>
      <option value="CASADO/A">CASADO/A</option>
      <option value="SOLTERO/A">SOLTERO/A</option>
    </select>
    </div>
     <div class="col s12">
               <label for="pareja">ESPOSO/A</label>
               <input type="text" name="pareja"    id="pareja"  >


             </div>

            <div class="col s6">


    <select class="pago" name="pago" >
         <option value="" >PAGO A TERMINO</option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
       </select>
  </div>
  <div class="col s6">
    <select class="contrato" name="contrato"  >
      <option value="" >CONTRATO A TERMINO</option>
      <option value="SI">SI</option>
      <option value="NO">NO</option>
    </select>

  </div>
  <div class="col s6">
    <select class="inmueble" name="inmueble" >
      <option value="" >CONDICION DEL INMUEBLE</option>
      <option value="BUENA">BUENA</option>
      <option value="MALA">MALA</option>
    </select>
  </div>
  <div class="col s6">
    <select class="impuestos" name="impuestos" >
      <option value="" >IMPUESTOS DEL INMUEBLE</option>
      <option value="AL DIA">AL DIA</option>
      <option value="DEUDA">DEUDA</option>
    </select>
  </div>
  <div class="col s6">
    <select class="disturbios" name="disturbios"  >
      <option value="" >DISTURBIOS</option>
      <option value="QUEJAS"> QUEJAS</option>
      <option value="NO">NO</option>
    </select>
  </div>

</div>
</div>
<div class="row">
<div class="input-field col s12">
  <textarea id="textarea2" class="materialize-textarea" type:"text" name="comentarios"  data-length="300"></textarea>
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
<div class="col s6">
<select class="categoria" name="categoria"  >
  <option value="" >SELECCIONA</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
</select>
</div>
<br>
<div class="row">
<div class="col s12">
<h5>Por favor ser rigurosos y profesionales a la hora de seleccionar ,
no solo se marcaran a los malos inquilinos sino que tambien es para tener en cuenta a los buenos,
por esto mismo pedimos seriedad a la hora de la clasificacion.

</h5>
</div>

</div>

<div class="row">
<div class="col s12">


<h4>GARANTIA 1</h4>
<div class="input-field col s6">
<input type="text" name="nombreg1"    id="nombreg1"  >
<label for="nombreg1">Nombre</label>
</div>
<div class="input-field col s6">
<input type="text" name="apellidog1"    id="apellidog1"   >
<label for="apellidog1">Apellido/s</label>
</div>
<div class="input-field col s12">
<input type="number" name="dnig1"   id="dnig1"  >
<label for="dnig1">DNI</label>

</div>
<div class="input-field col s12">
  <select class="tipogarante1" name="tipogarante1" >
    <option value=""   >TIPO</option>
    <option value="RECIBO SUELDO">RECIBO SUELDO</option>
    <option value="PROPIETARIO">PROPIETARIO</option>

  </select>
</div>
<h4>GARANTIA 2</h4>
<div class="input-field col s6">
    <input type="text" name="nombreg2"   id="nombreg2"  >
    <label for="nombreg2">Nombre</label>
  </div>
  <div class="input-field col s6">
    <input type="text" name="apellidog2"    id="apellidog2"   >
    <label for="apellidog2">Apellido/s</label>
  </div>
  <div class="input-field col s12">
    <input type="number" name="dnig2"   id="dnig2"  >
    <label for="dnig2">DNI</label>
  </div>
  <div class="input-field col s12">
    <select class="tipogarante2" name="tipogarante2" >
      <option value=""   >TIPO</option>
      <option value="RECIBO SUELDO">RECIBO SUELDO</option>
      <option value="PROPIETARIO">PROPIETARIO</option>

    </select>
  </div>
  <h4>GARANTIA 3</h4>
  <div class="input-field col s6">
      <input type="text" name="nombreg3"   id="nombreg3"  >
      <label for="nombreg3">Nombre</label>
    </div>
    <div class="input-field col s6">
      <input type="text" name="apellidog3"    id="apellidog3"   >
      <label for="apellidog3">Apellido/s</label>
    </div>
    <div class="input-field col s12">
      <input type="number" name="dnig3"   id="dnig3"  >
      <label for="dnig3">DNI</label>
    </div>
    <div class="input-field col s12">
      <select class="tipogarante3" name="tipogarante3">
        <option value=""  >TIPO</option>
        <option value="RECIBO SUELDO">RECIBO SUELDO</option>
        <option value="PROPIETARIO">PROPIETARIO</option>

      </select>
   
    </div>
     <a class="borrar"><p data-target="modal1" onclick="enviar(this.value)"   value="<?php echo $f['id'] ?>"  title="Politicas"> Al guardar aceptan nuestras politicas de seguridad</p> <br>
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
