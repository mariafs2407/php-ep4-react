<?php

require_once("config.php");
$idcategoria = $_GET["idcategoria"];
$rs =$cn ->query("SELECT * FROM categoria WHERE idcategoria = $idcategoria");
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