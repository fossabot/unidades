<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Riego.php");
require_once("../../../Clases/Persistencia/Persistencia_Riegomysqli.php");

$riego = new Dominio_Riego();
$cultivo = $_GET["txtCultivo"];
$riego->setFecha($_GET['txtFecha']);
$riego->setMetodo($_GET['txtMetodo']);
$riego->setVolumen($_GET['txtVolumen']);
$riego->setCriterioderiego($_GET['txtCriterioderiego']);
$riego->setEquipoderiego($_GET['txtEquipoderiego']);
$riego->setFuentedeagua($_GET['txtFuentedeagua']);
$perRiego = new Persistencia_Riegomysqli();
$perRiego->guardar($cultivo, $riego);
?>
<html>
    <head>

    </head>
    <body>

        <div class="textosMsj" align="center"><?php echo "Ingreso Riego Exitoso"; ?></div>

    </body>
</html>