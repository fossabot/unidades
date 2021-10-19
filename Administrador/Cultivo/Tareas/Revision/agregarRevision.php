<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Revision.php");
require_once("../../../Clases/Persistencia/Persistencia_Revisionmysqli.php");
$revision = new Dominio_Revision();
$cultivo = $_GET["txtCultivo"];
$revision->setFechaderevision($_GET['txtFechaderevision']);
$revision->setMaleza1($_GET['txtMaleza1']);
$revision->setMaleza2($_GET['txtMaleza2']);
$revision->setMaleza3($_GET['txtMaleza3']);
$revision->setMaleza4($_GET['txtMaleza4']);
$revision->setMaleza5($_GET['txtMaleza5']);
$revision->setInsectos1($_GET['txtInsectos1']);
$revision->setInsectos2($_GET['txtInsectos2']);
$revision->setInsectos3($_GET['txtInsectos3']);
$revision->setEnfermedades1($_GET['txtEnfermedades1']);
$revision->setEnfermedades2($_GET['txtEnfermedades2']);
$revision->setEstadodelcultivo($_GET['txtEstadodelcultivo']);
$revision->setObservaciones($_GET['txtObservaciones']);

$perRev = new Persistencia_Revisionmysqli();
$perRev->guardar($cultivo, $revision);
?>
<html>
    <head>

    </head>
    <body>

        <div class="textosMsj" align="center"><?php echo "Ingreso Revisión exitoso"; ?></div>

    </body>
</html>