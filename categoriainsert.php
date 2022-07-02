<?php

require_once("config.php");
//variables de mi tabla
$nombre= $_POST["nombre"];
$descrip=$_POST["descripcion"];//va en apostrofes porq es string si es number no lleva
$rs =$cn ->query("INSERT INTO categoria (nombre,descripcion) values ('$nombre','$descrip')");
echo $cn ->insert_id;//me devuelve el autonumerico generado 
$cn ->close();
?>
