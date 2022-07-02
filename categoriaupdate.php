<?php
require_once("config.php");
//variables de mi tabla
$idcategoria = $_POST["idcategoria"];
$nombre = $_POST["nombre"];
$descrip=$_POST["descripcion"];

$rs = $cn->query(
    "UPDATE categoria 
    SET nombre='$nombre' ,
    descripcion='$descrip' 
    WHERE idcategoria= $idcategoria");
$cn->close();

?>
