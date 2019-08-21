<?php

// Este programa es ejecutado por el modulo electronico, para 
// consultar el estado de la luz y proceder a hacer el cambio 
// respectivo en el Hardware (Bombillo).

include ("conexion.php");

$mysqli = new mysqli($host, $user, $pw, $db);
       
$sql = "SELECT * from estado_leds where id_mod='A000001' and id_luz = '1' order by id DESC";
//echo "sql es...".$sql;
$result1 = $mysqli->query($sql);
$row1 = $result1->fetch_array(MYSQLI_NUM);
$registro1 = $row1[0];
$dato_led1 = $row1[3];

$sql = "SELECT * from estado_leds where id_mod='A000001' and id_luz = '2' order by id DESC";
//echo "sql es...".$sql;
$result1 = $mysqli->query($sql);
$row1 = $result1->fetch_array(MYSQLI_NUM);
$registro2 = $row1[0];
$dato_led2 = $row1[3];

     
echo $dato_led2.$dato_led1;


?>