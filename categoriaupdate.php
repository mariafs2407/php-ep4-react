<?php
require_once("config.php");
//variables de mi tabla
$idcategoria = $_POST["idcategoria"];
$nombre = $_POST["nombre"];
$descripcion=$_POST["descripcion"];

$rs = $cn->query(
    "UPDATE categoria 
    SET nombre='$nombre' ,
    descripcion='$descripcion' 
    WHERE idcategoria= $idcategoria");
$cn->close();

?>
