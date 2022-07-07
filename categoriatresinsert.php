<?php

require_once("config.php");
//variables de mi tabla
$nombre= $_POST["nombre"];
$descripcion=$_POST["descripcion"];
$marcas=$_POST["marcas"];//va en apostrofes porq es string si es number no lleva
$rs =$cn ->query("INSERT INTO categoriatres (nombre,descripcion,marcas) values ('$nombre','$descripcion','$marcas')");
echo $cn ->insert_id;//me devuelve el autonumerico generado 
$cn ->close();
?>
