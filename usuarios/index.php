<?php include '../admin/conexion/conexion.php' ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link  rel="icon"   href="img/icono.png" type="image/png" />
  <title>Red Inmobiliarias</title>
  <meta name="description" content="Encontra tu lugar en el mundo">
  <meta name="keywords" content="Todas la inmobiliarias en un solo lugar">
  <!-- PAGE settings -->

  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>App Neon - Pingendo template</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Neon template made for app and softwares.">
  <meta name="keywords" content="Pingendo app neon free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../neon.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
</head>

<nav class="navbar navbar-expand-md fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="../index.php"><img src="../admin/img/iconoprincipal.png" style="width: 20%"> </a>


    </div>
  </div>
</nav>
<div class="py-5 bg-light" style="	background-image: url(../admin/img/6.jpg);	background-position: top left;	background-size: 100%;	background-size:cover;" >
    <div class="container ">
      <div class="row ">
        <div class="p-1 col-md-12 d-flex flex-column justify-content-center">
           <h1 class="display-4 text-light text-center mb-2">REGISTRO <br><br> </h1>

        </div>

        <div class="p-2  col-md-6">

          <form action="ins_usuarios.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8" class="text-dark">

            <div class="form-group">
              <input class="form-control" placeholder="Nick" type="text" name="nick" required autofocus title="DEBE CONTENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}"
              id="nick"  style="font-size:15px" >
            </div>

         <div class="validacion"></div>

         <p>*NO UTILIZAR Ñ ,ESPACIOS O NUMEROS (SOLO LETRAS) / DE 8 A 25 LETRAS / RECORDAR PARA INICIAR SESION</p>

        <div class="form-group">
          <input class="form-control" type="text" name="matricula"  placeholder="Matricula" id="matricula" >
        </div>


        <div class="form-group">
            

          <input type="password" placeholder="Contraseña" class="form-control" name="pass1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS"
          pattern="[A-Za-z0-9]{8,15}" id="pass1" required>

        </div>
        <p>ENTRE 8 Y 15 CARACTERES, MAY, MIN Y NUMEROS.</p>
        <div class="form-group">

          <input type="password"  placeholder="Confimar contraseña" class="form-control" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS"
          pattern="[A-Za-z0-9]{8,15}" id="pass2" required>

        </div>



        <div class="form-group">

          <input type="text" class="form-control" placeholder="Nombre comercial" name="nombre" title="Nombre del usuario" id="nombre" onblur="may(this.value, this.id)" required
          pattern="[A-Z/s ]+">


        </div>






        <div class="form-group">
          <input type="email" class="form-control" placeholder="Correo" name="correo" title="Correo electronico" id="correo" >
      </div>
      <div class="validacionemail"></div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Telefono / celular" name="telefono" title="telefono" id="telefono" >
        </div>



            <span>Logo inmobiliaria</span>
            <p>SOLO FORMATO PNG/JPG/JPEG</p>
            <input class="form-control" type="file" name="foto" placeholder="Logo inmobiliaria" >


<label>LOCACION</label>
<div class="col-md-12">

  <div class="form-group"><input name="estado"   list="estado" value="" class="form-control" id="inlineFormInputGroup" placeholder="Provincia"></div>
  <?php $sel_e=$con->prepare("SELECT estado FROM estados ");
    $sel_e->execute();
    $sel_e->bind_result( $estado);
    while ($sel_e->fetch()) {?>
    <datalist id="estado" >
    <option value="<?php echo $estado ?>" ></option>
    <?php }?>
    </datalist>
   </div>

            <div class="col-md-12">

              <div class="form-group"><input name="municipio"   list="ciudades" value="" class="form-control" id="inlineFormInputGroup" placeholder="Localidad"></div>
              <?php $sel_muni=$con->prepare("SELECT municipio FROM municipios ");
                $sel_muni->execute();
                $sel_muni->bind_result( $municipio);
                while ($sel_muni->fetch()) {?>
                <datalist id="ciudades" >
                <option value="<?php echo $municipio ?>" ></option>
                <?php }?>
                </datalist>
               </div>
          <div class="col s12">
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Calle Num"name="callenum" id="callenum" >

        </div>
        </div>

        <div class="col s12">


        <button type="submit" class="btn mt-4 btn-block btn-outline-light p-2"><b>Registrar</b></button>
    </div>

          </form>
        </div>
      </div>
    </div>
  </div>
   <!-- JavaScript dependencies -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
  
  
  <?php include '../admin/extend/scripts.php';   ?>

<script>
  $('select').material_select();

  </script>
<script src="../admin/js/validacion.js"></script>
<script src="validacionemail.js"></script>

<script src="../admin/js/estados.js"></script>
  </body>

  </html>
