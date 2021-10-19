<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Siembra.php");
require_once("../../../Clases/Persistencia/Persistencia_Siembramysqli.php");

$siembra = new Dominio_Siembra();
$cultivo = $_GET["txtCultivo"];
$siembra->setFechadesiembra($_GET["txtFechadesiembra"]);
$siembra->setMetododesiembra($_GET["txtMetododesiembra"]);
$siembra->setSembradora($_GET["txtSembradora"]);
$siembra->setDistanciaentresurcos($_GET["txtDistanciaentresurcos"]);
$siembra->setSembrador($_GET["txtSembrador"]);
$siembra->setFechadeemergencia($_GET["txtFechadeemergencia"]);
$siembra->setFechaFertilInicial($_GET["txtFechaFertilInicial"]);
$siembra->setFertilizante($_GET["txtFertilizante"]);
$siembra->setDosisFert($_GET["txtDosisFert"]);
$siembra->setUnidadFert($_GET["txtUnidadFert"]);
$siembra->setObservaciones($_GET["txtObservaciones"]);
$siembra->setNombreCompBot1($_GET["txtNombreCompBot1"]);
$siembra->setNombreCompBot2($_GET["txtNombreCompBot2"]);
$siembra->setNombreCompBot3($_GET["txtNombreCompBot3"]);
$siembra->setNombreCompBot4($_GET["txtNombreCompBot4"]);
$siembra->setNombreCompBot5($_GET["txtNombreCompBot5"]);
$siembra->setNombreCompBot6($_GET["txtNombreCompBot6"]);
$siembra->setNombreCompBot7($_GET["txtNombreCompBot7"]);
$siembra->setNombreCompBot8($_GET["txtNombreCompBot8"]);
$siembra->setNombreCompBot9($_GET["txtNombreCompBot9"]);
$siembra->setNombreCompBot10($_GET["txtNombreCompBot10"]);
$perSiembra = new Persistencia_Siembramysqli();
$existe = $perSiembra->existe($cultivo);
?>
<html>
    <head>

    </head>
    <body>
        <?php
        if ($existe == false) {
            $perSiembra->guardar($cultivo, $siembra);
            ?>
            <div class="textosMsj" align="center"><?php echo "Ingreso información de Siembra  exitoso! Presione 'X' para volver."; ?></div>

        <?php } else { ?>
            <div class="textosMsj" align="center"><?php echo "Existe información ingresada de Siembra"; ?></div>

            <div class="textosMsj" align="center"><br><br><a style="background-color:#666666; font:trebuchet MS" href="altaSiembra.php?idC=<?php echo $cultivo ?>"> &lt;&lt;Volver a Ingreso </a></div>

        <?php } ?>
    </body>
</html>