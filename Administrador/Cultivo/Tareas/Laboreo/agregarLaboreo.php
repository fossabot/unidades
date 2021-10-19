<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Laboreo.php");
require_once("../../../Clases/Persistencia/Persistencia_Laboreomysqli.php");

$laboreo = new Dominio_Laboreo();
$laboreo->setFecha($_GET["txtFecha"]);
$laboreo->setEquipo($_GET["txtEquipo"]);
$laboreo->setMaquinista($_GET["txtMaquinista"]);
$cultivo = $_GET["txtCultivo"];

$perLaboreo = new Persistencia_Laboreomysqli();
$perLaboreo->guardar($cultivo, $laboreo);
?>
<html>
    <head>

    </head>
    <body>

        <div class="textosMsj" align="center"><?php echo "Ingreso Laboreo Exitoso"; ?></div>


    </body>
</html>