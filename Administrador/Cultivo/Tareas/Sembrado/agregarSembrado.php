<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Sembrado.php");
require_once("../../../Clases/Persistencia/Persistencia_Sembradomysqli.php");

$sembrado = new Dominio_Sembrado();
$cultivo = $_GET["txtCultivo"];
$sembrado->setEspecie($_GET['txtEspecie']);
$sembrado->setCultivar($_GET['txtCultivar']);
$sembrado->setNombreexperimentaldelcultivar($_GET['txtNombreexperimentaldelcultivar']);
$sembrado->setDensidaddesiembra($_GET['txtDensidaddesiembra']);
$sembrado->setLote($_GET['txtLote']);
$sembrado->setGerm($_GET['txtGerm']);
$sembrado->setPureza($_GET['txtPureza']);
$sembrado->setPeso1000($_GET['txtPeso1000']);
$sembrado->setDensidadkgha($_GET['txtDensidadkgha']);
$sembrado->setFechaCurasem($_GET['txtFechaCurasem']);
$sembrado->setCurasemilla1($_GET['txtCurasemilla1']);
$sembrado->setDosisCurSem1($_GET['txtDosisCurSem1']);
$sembrado->setCurasemilla2($_GET['txtCurasemilla2']);
$sembrado->setDosisCurSem2($_GET['txtDosisCurSem2']);
$sembrado->setFechaInoc($_GET['txtFechaInoc']);
$sembrado->setInoculante($_GET['txtInoculante']);
$sembrado->setDosisInoc($_GET['txtDosisInoc']);
$sembrado->setAdherenteInoc($_GET['txtAdherenteInoc']);
$sembrado->setDosis($_GET['txtDosis']);

$perSembrado = new Persistencia_Sembradomysqli();
$existe = $perSembrado->existe($cultivo);
?>
<html>
    <head>

    </head>
    <body>
        <?php
        if ($existe == false) {
            $perSembrado->guardar($cultivo, $sembrado);
            ?>
            <div class="textosMsj" align="center"><?php echo "Ingreso Informacion de lo que se Sembro realizado con exito"; ?></div>

<?php } else { ?>
            <div class="textosMsj" align="center"><?php echo "Ya se ingreso informacion de lo que se Sembro en este potrero, presione X"; ?></div>
        <?php } ?>
    </body>
</html>