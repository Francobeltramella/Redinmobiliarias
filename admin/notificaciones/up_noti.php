<?php
$conn = new mysqli("localhost", "u351422869_ri", "12345678", "u351422869_ri");

$sql = "UPDATE notificaciones SET estado = 1 WHERE estado = 0";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM notificaciones ORDER BY id DESC limit 5";
$result = mysqli_query($conn, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject' >". $row["autor"] . " - <span>". $fechaFormateada . "</span> </div>" .
	"<div class='notification-comment'>" . $row["mensaje"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>


<style media="screen">
#notification-header {
	background: #fff;
		padding: 6px;
		text-align: right;
		/* margin-top: 4px; */
		border-radius: 5px;
		margin-left: 5px;
		margin-right: 10px;
}
button#notification-icon {
	background: transparent;
	border: 0;
	position:relative;
	cursor:pointer;
}

#form-header {
	font-size:1.5em;
}
#frmNotification {
	padding:20px 30px;
}
.form-row{
	padding-bottom:20px;
}
#btn-send {
	background: #258bdc;
	color: #FFF;
	padding: 10px 40px;
	border: 0px;
}
div.demo-content input[type='text'],textarea{
	width: 100%;
	padding: 10px 5px;
}
#notification-latest {
	color: #555;
	position: absolute;
	right: 0px;
	background: #f5f5f5;
	box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.20);
	/* max-width: 250px; */
	text-align: left;
	font-size: 12px;
}

.notification-item {
	 border: white 4px outset;
	 white-space: pre;
	cursor:pointer;
	line-height: normal;
	font-family: sans-serif;


}
.notification-subject {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	color: grey;
	line-height: normal;
}
.notification-comment {
	white-space:inherit;
	overflow: hidden;
	text-overflow: ellipsis;
	font-style:italic;
}

</style>
