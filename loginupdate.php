<?php

require_once("config.php");
//variables de mi tabla
$idusuario =$_POST["idusuario"];
$nombres= $_POST["nombres"];
$apellidos=$_POST["apellidos"];
$edad =$_POST["edad"];
$usuario = $_POST["usuario"];
$clave =$_POST["clave"];//va en apostrofes porq es string si es number no lleva
$rs =$cn ->query("UPDATE login 
set nombres ='$nombres' ,
apellidos ='$apellidos',
edad =$edad,
usuario='$usuario',
clave=$clave
WHERE idusuario= $idusuario");
$cn ->close();

?>