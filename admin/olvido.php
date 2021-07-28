<?php
include 'conexion/conexion.php';
 ?>

<!DOCTYPE html>
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
<body>
  <main>
    <nav class="navbar navbar-expand-md fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/iconoprincipal.png" style="width: 20%"> </a>


        </div>
      </div>
    </nav>
    <div class="py-5 pt-5  bg-light" style="	background-image: url(img/4.jpg);	background-position: top left;	background-size: 100%;	background-size:cover;" >
        <div class="container">
          <div class="row">
            <div class=" py-3">
              <div class="container">
                <div class="row pt-5">
                  <div class="align-self-center col-lg-7 text-md-left text-center">
                    <h2 class="text-light"> <b><b>¿Olvidaste tu contraseña o nick?</b></b> </h2>
                  <br>  <form  action="cambiar.php" method="post" autocomplete="off">
                      <div class="form-group">
                        <input class="form-control" type="email" name="correo"  id="correo" >
                        <label for="correo">Correo electronico</label>
                      </div>
              <div class="validacionCorreo"></div>
              <br>
              <div class="input-field center">
               <button type="submit" class="btn waves-effect waves-light">Cambiar</button>
               </div>


            </form>
                  </div>
                  <div class="align-self-right mt-1 col-sm-5 animate-in-right">
                    <img class="img-fluid d-block mx-auto " src="img/duda2.png" style=" width:300px " > </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
      <script src="admin/js/materialize.min.js"></script>



    <script src="js/validacionCorreo.js"></script>
</body>
</html>
