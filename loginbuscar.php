<?php

require_once("config.php");
$idusuario = $_GET["idusuario"];
$rs =$cn ->query("SELECT * FROM login WHERE usuario = $idusuario");
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
} else {
    echo "[]";
}
$cn ->close();

?>