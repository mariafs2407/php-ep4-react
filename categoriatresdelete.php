<?php

require_once("config.php");
//variables de mi tabla
$idcategoria= $_POST["idcategoria"];
//va en apostrofes porq es string si es number no lleva
$rs =$cn ->query("DELETE FROM categoriatres WHERE idcategoria = $idcategoria");
$cn ->close();

?>