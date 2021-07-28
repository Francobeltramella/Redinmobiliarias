<?php  @session_start();
if(isset($_SESSION['nick'])){
  header('location:inicio');
}
?>


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
    <a class="navbar-brand" href="../index.php"><img src="img/iconoprincipal.png" style="width: 20%"> </a>


    </div>
  </div>
</nav>
<div class="py-5 pt-5 bg-light" style="	background-image: url(img/4.jpg);	background-position: top left;	background-size: 100%;	background-size:cover;" >
    <div class="container">
      <div class="row">
        <div class="p-5 col-md-6 d-flex flex-column justify-content-center">
          <img class="img-fluid d-block mb-4" src="img/iconoprincipal.png">
        </div>
        <div class="p-5 col-md-5">
          <h3 class="mb-2 text-light text-center">INICIAR SESION</h3>
          <br>
          <form  action="login/index.php" method="post" autocomplete="off" class="text-light">
            <div class="form-group"><label>Nick</label> <input class="form-control" name="usuario" id="usuario" required  autofocus placeholder="Nick"> </div>
            <br><div class="form-group"> <label>Contraseña</label> <input type="password"   name="contra" id="contra"   class="form-control" placeholder="Contraseña"> </div>
            <input type="checkbox" id="mostrar_contrasena"/> <label for="mostrar_contrasena">Mostrar Contraseña</label><br/>

                <div class="input-field center">
                   <a href="olvido.php" tabindex="5" class="forgot-password"  style="float: right">¿Olvidaste tu contraseña / Usuario?</a>
                     <br>
                   </div>
          <br><button type="submit" class="btn mt-4 btn-block btn-outline-light p-2"><b>Ingresar</b></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
  <script>
  $(document).ready(function () {
    $('#mostrar_contrasena').click(function () {
      if ($('#mostrar_contrasena').is(':checked')) {
        $('#contra').attr('type', 'text');
      } else {
        $('#contra').attr('type', 'password');
      }
    });
  });
  </script>
  </body>

  </html>
