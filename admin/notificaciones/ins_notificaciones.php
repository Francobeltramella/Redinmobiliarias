<?php
	$conn = new mysqli("localhost", "u351422869_ri", "12345678", "u351422869_ri");
	$count=0;
	if(!empty($_POST['add'])) {
		$autor = mysqli_real_escape_string($conn,$_POST["autor"]);
		$mensaje = mysqli_real_escape_string($conn,$_POST["mensaje"]);
		$sql = "INSERT INTO notificaciones (autor,mensaje) VALUES('" . $autor . "','" . $mensaje . "')";
		mysqli_query($conn, $sql);
	}
	$sql2="SELECT * FROM datos WHERE estado = 0";
	$result=mysqli_query($conn, $sql2);
	$count=mysqli_num_rows($result);

	header( 'Location: ../inicio/index.php' ) ;
?>
