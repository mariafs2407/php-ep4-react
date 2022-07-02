<?php

require_once("config.php");
//variables de mi tabla
$idusuario = $_POST["idusuario"];
//va en apostrofes porq es string si es number no lleva
$rs =$cn ->query("DELETE FROM login WHERE idusuario = $idusuario");
$cn ->close();

?>