<?php

require_once("config.php");
$usuario = $_GET["usuario"];
$rs =$cn ->query("SELECT * FROM login WHERE usuario = '$usuario'");
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