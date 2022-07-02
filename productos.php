<?php
if (isset($_POST["idcategoria"])) {
    $idcategoria = $_POST["idcategoria"];
    require_once("config.php");
    $rs = $cn->query("SELECT * FROM productos WHERE idcategoria=$idcategoria");
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $res[] = $row;
        }
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
    } else {
        echo "[]";
    }
    $cn->close(); //con esto es suficiente
} else {
    echo 1;/*no se le a enviado el parametro de idpedido*/
}
