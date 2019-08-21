<?php

// Este programa es ejecutado por el modulo electronico, para 
// escribir el nuevo estado de la luz en la base de datos
// si se hace un cambio por Hardware (Encendido o apagado manual del Bombillo).

include ("conexion.php");

$dato_led = $_GET['dato_led'];
$id_mod = "A000001";
$id_luz = $_GET['id_luz'];

$mysqli = new mysqli($host, $user, $pw, $db);
       
$sql = "INSERT INTO estado_leds(id_mod, id_luz, dato_led,fecha,hora,origen_cambio) VALUES ('$id_mod','$id_luz','$dato_led', CURDATE(),CURTIME(),'boton')";
echo "sql es...".$sql;
$result1 = $mysqli->query($sql);
echo "Dato Ingresado, led en...".$dato_led;
   
?>