<?php

@session_start();

$con = new mysqli("localhost", "root", "", "u351422869_ri");
$con->set_charset('utf8');
$count = 0;
    $sql2 = "SELECT * FROM notificaciones WHERE estado = 0";
    $result = mysqli_query($con, $sql2);
    $count = mysqli_num_rows($result);
?>
