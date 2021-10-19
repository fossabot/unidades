<?php
date_default_timezone_set("America/Montevideo");
require_once("../Clases/Dominio/Dominio_Cultivo.php");
require_once("../Clases/Dominio/Dominio_Potrero.php");
require_once("../Clases/Persistencia/Persistencia_CultivoMySqli.php");
$cultivo = new Dominio_Cultivo();
$potrero = new Dominio_Potrero();
$potrero->setEstado('SinCoordenadas');
$potrero->setNombre($_GET['txtNombreP']);
$potrero->setSuperficie($_GET['txtSuperficieP']);
$cultivo->setCodigoClave($_GET['txtCodClave']);
$cultivo->setNombre($_GET['txtNombre']);
$cultivo->setTipoSuelo1($_GET['selTS1']);
$cultivo->setTipoSuelo2($_GET['selTS2']);
$cultivo->setTipoSuelo3($_GET['selTS3']);
$cultivo->setTipoPasturaCultivo($_GET['selTipoPC']);
$cultivo->setCategoria($_GET['selCat']);
$cultivo->setAnosiembra($_GET['txtAnoSiembra']);
$cultivo->setFechaInicio($_GET['txtFechaInicio']);
$perCultivo = new Persistencia_Cultivomysqli();
$existe = $perCultivo->existe($cultivo);
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>

    </head>
    <body>
        <?php
        if ($existe == false) {
            $perCultivo->guardarCSP($cultivo, $potrero);
            ?>
            <script>
                alert("Cultivo Guardado!");
                window.location.href = "listaCultivos.php";
            </script>
        <?php } else { ?>
            <script>
                alert(<?php echo "Existe Cultivo con el Codio Clave " . $cultivo->getCodigoClave() . ""; ?>);
                window.location.href = "altaCultivoSinPotrero.php";
            </script>
        <?php } ?>
    </body>
</html>