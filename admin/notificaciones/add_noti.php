<?php include '../extend/header.php'; ?>

<body>

<form name="frmNotification" id="frmNotification" action="ins_notificaciones.php" method="post" >
   <div class="form-group">
       <label for="autor">Autor </label>
       <input type="text" class="form-control" name="autor" id="autor" placeholder="Ingresa Autor" required>
   </div>
   <div class="form-group">
       <label for="mensaje">Mensaje </label>
       <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
   </div>
   <input type="hidden" name="fecha" value="">
   <input type="hidden" name="estado" value="">
   <input type="hidden" name="id" value="">
   <div class="form-group">
       <input type="submit" name="add" id="btn-send" value="Enviar">
   </div>
</form>
</body>
