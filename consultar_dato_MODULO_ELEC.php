<?php

// Este programa es ejecutado por el modulo electronico, para 
// consultar el estado de la luz y proceder a hacer el cambio 
// respectivo en el Hardware (Bombillo).

include ("conexion.php");

$id_luz = $_GET['id_luz'];

$mysqli = new mysqli($host, $user, $pw, $db);
       
$sql = "SELECT * from estado_leds where id_mod='A000001' and id_luz = '$id_luz' order by id DESC";
//echo "sql es...".$sql;
$result1 = $mysqli->query($sql);
$row1 = $result1->fetch_array(MYSQLI_NUM);
$registro = $row1[0];
$dato_led = $row1[3];
     
echo $dato_led;


?>