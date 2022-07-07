<?php
require_once("config.php");
//variables de mi tabla
$idcategoria = $_POST["idcategoria"];
$nombre = $_POST["nombre"];
$descripcion=$_POST["descripcion"];
$marcas=$_POST["marcas"];

$rs = $cn->query(
    "UPDATE categoria 
    SET nombre='$nombre' ,
    descripcion='$descripcion' ,
    marcas = '$marcas'
    WHERE idcategoria= $idcategoria");
$cn->close();

?>
