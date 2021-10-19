<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Aplicacion.php");
require_once("../../../Clases/Persistencia/Persistencia_Aplicacionmysqli.php");

$aplicacion = new Dominio_Aplicacion();
$cultivo = $_GET["txtCultivo"];
$aplicacion->setTipodeaplicacion($_GET['txtTipodeaplicacion']);
$aplicacion->setFecha($_GET['txtFecha']);
$aplicacion->setHora($_GET['txtHora']);
$aplicacion->setMetodo($_GET['txtMetodo']);
$aplicacion->setMaquina($_GET['txtMaquina']);
$aplicacion->setMaquinista($_GET['txtMaquinista']);
$aplicacion->setProductocomercial($_GET['txtProductocomercial']);
$aplicacion->setDosis($_GET['txtDosis']);
$aplicacion->setUnidad($_GET['txtUnidad']);
$aplicacion->setEstadodelcultivo($_GET['txtEstadodelcultivo']);
$aplicacion->setObservaciones($_GET['txtObservaciones']);

$perAp = new Persistencia_Aplicacionmysqli();
$perAp->guardar($cultivo, $aplicacion);
?>
<html>
    <head>

    </head>
    <body>
        <div class="textosMsj" align="center"><?php echo "Aplicación Registrada con Exito"; ?></div>
    </body>
</html>