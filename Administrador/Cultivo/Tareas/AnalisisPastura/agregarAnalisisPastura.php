<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_AnalisisPastura.php");
require_once("../../../Clases/Persistencia/Persistencia_AnalisisPasturamysqli.php");

$cultivo = $_GET["txtCultivo"];
$ap = new Dominio_AnalisisPastura();

$ap->setMS($_GET['txtMS']);
$ap->setCenizas($_GET['txtCenizas']);
$ap->setPC($_GET['txtPC']);
$ap->setFDA($_GET['txtFDA']);
$ap->setFDN($_GET['txtFDN']);
$ap->setN($_GET['txtN']);
$ap->setNNH4($_GET['txtNNH4']);
$ap->setP($_GET['txtP']);
$ap->setEnergia($_GET['txtEnergia']);
$ap->setExtratoEtereo($_GET['txtExtratoEtereo']);


$pAP = new Persistencia_AnalisisPasturamysqli();
$pAP->guardar($cultivo, $ap);
?>
<html>
    <head>

    </head>
    <body>
        <div class="textosMsj" align="center"><?php echo "Analisis de Pastura Registrado con exito." ?></div>	
    </body>
</html>