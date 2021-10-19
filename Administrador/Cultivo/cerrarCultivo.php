<?php
date_default_timezone_set("America/Montevideo");
require_once("../Clases/Persistencia/Persistencia_CultivoMySqli.php");
$idP = $_GET['idP'];
$cultivo = $_GET['idCul'];

$perCultivo = new Persistencia_Cultivomysqli();
$perCultivo->cerrarCultivo($cultivo, $idP);
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>

    </head>
    <body onLoad="">
        <script>

            alert("Cultivo Cerrado!");
            window.location.href = "listaCultivos.php";

        </script>
    </body>
</html>