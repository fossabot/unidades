<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_DestinoGranoSemilla.php");
require_once("../../../Clases/Persistencia/Persistencia_DestinoGranoSemillamysqli.php");

$destinogs = new Dominio_GranoSemilla();
$cultivo = $_GET["txtCultivo"];
$cb=$_GET["txtCB"];

$destinogs->setNumCosecha($_GET['txtNumCosecha']);
$destinogs->setMetodo($_GET['txtMetodo']);
$destinogs->setFechaCorte($_GET['txtFechaCorte']);
$destinogs->setHoraCorte($_GET['txtHoraCorte']);
$destinogs->setMaquinaCorte($_GET['txtMaquinaCorte']);
$destinogs->setMaquinistaCorte($_GET['txtMaquinistaCorte']);
$destinogs->setObservacionCorte($_GET['txtObservacionCorte']);
$destinogs->setFechaMovimiento($_GET['txtFechaMovimiento']);
$destinogs->setHoraMovimiento($_GET['txtHoraMovimiento']);
$destinogs->setMaquinaMovi($_GET['txtMaquinaMovi']);
$destinogs->setMaquinistaMovi($_GET['txtMaquinistaMovi']);
$destinogs->setObservacionMov($_GET['txtObservacionMov']);
$destinogs->setFechaCosecha($_GET['txtFechaCosecha']);
$destinogs->setMaquina($_GET['txtMaquina']);
$destinogs->setMaquinista($_GET['txtMaquinista']);
$destinogs->setRendimientoSucio($_GET['txtRendimientoSucio']);
$destinogs->setRendimientoLimpio($_GET['txtRendimientoLimpio']);
//A PEDIDO DE INTEGRANTES DE LAS UNIDADES SE AGREGA UN CAMPO: Componente Botanico. PARA QUE ELIJAN EL QUE SE CORTA
$perDGS = new Persistencia_DestinoGranoSemillamysqli();
$perDGS->guardar($cultivo, $destinogs, $cb);
?>
<html>
    <head>

    </head>
    <body>
        <div class="textosMsj" align="center"><?php echo "Tarea registrada con exito"; ?></div>
    </body>
</html>