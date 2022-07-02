<?php

require_once("config.php");
//variables de mi tabla
$nombres= $_POST["nombres"];
$apellidos=$_POST["apellidos"];
$edad =$_POST["edad"];
$usuario = $_POST["usuario"];
$clave =$_POST["clave"];//va en apostrofes porq es string si es number no lleva
$rs =$cn ->query("INSERT INTO 
login (nombres,apellidos,edad,usuario,clave) 
values ('$nombres','$apellidos',$edad,'$usuario',$clave)");
echo $cn ->insert_id;//me devuelve el autonumerico generado 
$cn ->close();

?>