<?php  include("../conexion/conexion.php");?>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/estilos.css" rel="stylesheet">

<div class="container right" style="width:90px;   ">



        <div style="position:absolute ; z-index:1 ">
            <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn success"><span div class="notification-count"  ><?php if($count>0) { echo $count; } ?></span><img src="../img/descarga.png"  style="width:70px"  /></button>
              



            <div id="notification-latest" ></div>
        </div>

</div>

<?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
<?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>



<script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="../js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "../notificaciones/up_noti.php",
          type: "POST",
          processData:false,
          success: function(data){
            $(".notification-count").remove();
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}
        });
      }

      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });
    </script>
