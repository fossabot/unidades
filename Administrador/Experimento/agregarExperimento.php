<?php
require_once("../Clases/Dominio/Dominio_Experimento.php");
require_once("../Clases/Persistencia/Persistencia_Experimentomysqli.php");

$experimento = new Dominio_Experimento();
$experimento->setCodECR($_GET['txtCodECR']);
$experimento->setFechaSiembra($_GET['txtFechaSiembra']);
$experimento->setAutor($_GET['txtAutor']);
$experimento->setNombreCompBot1($_GET['txtNombreCompBot1']);
$experimento->setNombreCompBot2($_GET['txtNombreCompBot2']);
$experimento->setNombreCompBot3($_GET['txtNombreCompBot3']);
$experimento->setNombreCompBot4($_GET['txtNombreCompBot4']);
$experimento->setNombreCompBot5($_GET['txtNombreCompBot5']);
$experimento->setNombreCompBot6($_GET['txtNombreCompBot6']);
$experimento->setNombreCompBot7($_GET['txtNombreCompBot7']);
$experimento->setNombreCompBot8($_GET['txtNombreCompBot8']);
$experimento->setNombreCompBot9($_GET['txtNombreCompBot9']);
$experimento->setNombreCompBot10($_GET['txtNombreCompBot10']);
$experimento->setGrupodeensayo($_GET['txtGrupodeensayo']);
$experimento->setnutriente($_GET['txtnutriente']);
$experimento->setdosis($_GET['txtdosis']);
$experimento->setfuente($_GET['txtfuente']);
$experimento->setFechaCierreExperiento($_GET['txtFechaCierreExperiento']);
$experimento->setCITRICO($_GET['txtCITRICO']);
$experimento->setSS($_GET['txtSS']);
$experimento->setPMN($_GET['txtPMN']);
$experimento->setNITRATO($_GET['txtNITRATO']);
$experimento->setNNH4($_GET['txtN-NH4']);
$experimento->setK($_GET['txtK']);
$experimento->setOTRO($_GET['txtOTRO']);
$experimento->setBray1M2($_GET['txtBray1M2']);
$experimento->setResinasM2($_GET['txtResinasM2']);
$experimento->setCITRICOM2($_GET['txtCITRICOM2']);
$experimento->setSSM2($_GET['txtSSM2']);
$experimento->setPMNM2($_GET['txtPMNM2']);
$experimento->setNITRATOM2($_GET['txtNITRATOM2']);
$experimento->setNNH4M2($_GET['txtN-NH4M2']);
$experimento->setKM2($_GET['txtKM2']);
$experimento->setOTROM2($_GET['txtOTROM2']);
$experimento->setBray1M3($_GET['txtBray1M3']);
$experimento->setResinasM3($_GET['txtResinasM3']);
$experimento->setCITRICOM3($_GET['txtCITRICOM3']);
$experimento->setSSM3($_GET['txtSSM3']);
$experimento->setPMNM3($_GET['txtPMNM3']);
$experimento->setNITRATOM3($_GET['txtNITRATOM3']);
$experimento->setNNH4M3($_GET['txtN-NH4M3']);
$experimento->setKM3($_GET['txtKM3']);
$experimento->setOTROM3($_GET['txtOTROM3']);
$experimento->setMELEGIDAB1($_GET['txtMELEGIDAB1']);
$experimento->setMELEGIDAR($_GET['txtMELEGIDAR']);
$experimento->setMELEGIDAC($_GET['txtMELEGIDAC']);
$experimento->setMELEGIDASS($_GET['txtMELEGIDASS']);
$experimento->setMELEGIDAPMN($_GET['txtMELEGIDAPMN']);
$experimento->setMELEGIDAN($_GET['txtMELEGIDAN']);
$experimento->setMELEGIDANH4($_GET['txtMELEGIDANH4']);
$experimento->setMELEGIDAK($_GET['txtMELEGIDAK']);
$experimento->setMELEGIDAO($_GET['txtMELEGIDAO']);
$experimento->setPotrero($_GET['txtPotrero']);
$perExperimento = new Persistencia_Experimentomysqli();
$perExperimento->guardar($experimento);
?>
<html>
    <head>

    </head>
    <body>
        <script>
            alert("Experiento Guardado!");
            window.location.href = "../Potreros/vistaPotrerosUnidad.php";
        </script>

    </body>
</html>