<?php
date_default_timezone_set("America/Montevideo");
require_once("../Clases/Dominio/Dominio_Cultivo.php");
require_once("../Clases/Persistencia/Persistencia_CultivoMySqli.php");
$cultivo = new Dominio_Cultivo();
$cultivo->setCodigoClave($_GET['txtCodClave']);
$cultivo->setNombre($_GET['txtNombre']);
$cultivo->setTipoSuelo1($_GET['selTS1']);
$cultivo->setTipoSuelo2($_GET['selTS2']);
$cultivo->setTipoSuelo3($_GET['selTS3']);
$cultivo->setTipoPasturaCultivo($_GET['selTipoPC']);
$cultivo->setCategoria($_GET['selCat']);
$cultivo->setPotrero($_GET['txtPotrero']);
$cultivo->setAnosiembra($_GET['txtAnoSiembra']);
$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
$HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
$cultivo->setFechaInicio($FechaTxt);
$perCultivo = new Persistencia_Cultivomysqli();
$existe = $perCultivo->existe($cultivo);
?>
<html>
    <head>

    </head>
    <body>
        <?php
        if ($existe == false) {
            $perCultivo->guardar($cultivo);
            ?>
            <script>
                alert("Cultivo Guardado!");
                window.location.href = "listaCultivos.php";
            </script>
        <?php } else { ?>
            <script>
                alert(<?php echo "Existe Cultivo con el Codio Clave " . $cultivo->getCodigoClave() . ""; ?>);
                window.location.href = "altaCultivo.php";
            </script>
        <?php } ?>
    </body>
</html>