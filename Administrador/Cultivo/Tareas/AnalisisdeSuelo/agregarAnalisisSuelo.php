<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_AnalisisSuelo.php");
require_once("../../../Clases/Persistencia/Persistencia_AnalisisSuelomysqli.php");

$cultivo = $_GET["txtCultivo"];
$as = new Dominio_AnalisisSuelo();

$as->setIdLab($_GET['txtIdLab']);
$as->setFechaMuestreo($_GET['txtFechaMuestreo']);
$as->setProfundidad($_GET['txtProfundidad']);
$as->setNumPinchazos($_GET['txtNumPinchazos']);
$as->setSS($_GET['txtSS']);
$as->setpHagua($_GET['txtpHagua']);
$as->setphKCl($_GET['txtphKCl']);
$as->setPBrayI($_GET['txtPBrayI']);
$as->setPresinas($_GET['txtPresinas']);
$as->setPaccitrico($_GET['txtPaccítrico']);
$as->setCa($_GET['txtCa']);
$as->setMg($_GET['txtMg']);
$as->setK($_GET['txtK']);
$as->setNa($_GET['txtNa']);
$as->setB($_GET['txtB']);
$as->setCu($_GET['txtCu']);
$as->setFe($_GET['txtFe']);
$as->setMn($_GET['txtMn']);
$as->setZn($_GET['txtZn']);
$as->setSulfatos($_GET['txtSulfatos']);
$as->setTextura($_GET['txtTextura']);
$as->setNitratos($_GET['txtNitratos']);
$as->setAmonio($_GET['txtAmonio']);
$as->setCarbonatos($_GET['txtCarbonatos']);
$as->setNitrogenoTotal($_GET['txtNitrogenoTotal']);
$as->setAl($_GET['txtAl']);
$as->setAcidezTitulable($_GET['txtAcidezTitulable']);
$as->setCarbonoOrganico($_GET['txtCarbonoOrganico']);
$as->setCE($_GET['txtCE']);
$as->setPMN($_GET['txtPMN']);
$as->setCICpH7($_GET['txtCICpH7']);
$as->setDensidadaparente($_GET['txtDensidadaparente']);

$pAS = new Persistencia_AnalisisSuelomysqli();
$pAS->guardar($cultivo, $as);
?>
<html>
    <head>

    </head>
    <body>
        <div class="textosMsj" align="center"><?php echo "Analisis de Suelo Registrado con exito." ?></div>	
    </body>
</html>