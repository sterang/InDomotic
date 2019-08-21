
<?php

// Este programa se encarga de actualizar el estado del bombillo en la base de datos, tomando como parametro el id de la luz y el dato de led 0 apagado, 1 encendido

include ("conexion.php");

$mysqli = new mysqli($host, $user, $pw, $db);

$dato_led = $_POST['dato_led'];
$id_luz = $_POST['id_luz'];
$id_mod = "A000001";


$sql = "INSERT INTO estado_leds(id_mod, id_luz, dato_led,fecha,hora,origen_cambio) VALUES ('$id_mod','$id_luz','$dato_led', CURDATE(),CURTIME(),'web')";
$result1 = $mysqli->query($sql);

// Una vez actualizada la base de datos, se devuelve al programa control luces.

header('Location: control_luces.php');

?>