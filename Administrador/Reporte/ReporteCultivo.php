<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqlii.php");
$pPot = new Persistencia_Potreromysqlii();
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
$datos = $pPot->potrerosCCdU($uni);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css"/>
        <title>Documento sin título</title>
        <script>
            var idPotrero = new Array();
            var CodigoClave = new Array();
            var NombresP = new Array();
            var idCultivo = new Array();
            var unidad = " <?php echo $nombreUni ?>";

<?php
$combobit = '';
$i = 0;
while ($ci = mysqliii_fetch_array($datos)) {
    $id = $ci["idPotrero"];
    $cultivo = $ci["CodigoClave"];
    $nom = $ci["Nombre"];
    $idCultivo = $ci["idCultivo"];
    echo 'idPotrero[' . $i . '] = "' . $id . '";';
    echo 'CodigoClave[' . $i . '] = "' . $cultivo . '";';
    echo 'NombresP[' . $i . '] = "' . $nom . '";';
    echo 'idCultivo[' . $i . '] = "' . $idCultivo . '";';
    $combobit .=" <option value='" . $id . "'>" . $nom . "</option>";
    $i++;
}
?>
            function mostrarCultivos() {

                var sel = document.getElementById("selPot");
                var nom = sel.options[sel.selectedIndex].text.toString();
                var id = sel.options[sel.selectedIndex].value;
                document.getElementById("selCultiovo").options.length = 0;
                for (i = 0; i < idPotrero.length; i++) {
                    if (idPotrero[i] == id) {
                        document.getElementById("selCultiovo").options[document.getElementById("selCultiovo").options.length] = new Option(CodigoClave[i], idCultivo[i]);
                    }
                }
            }
            function mostrar() {
                var sel = document.getElementById("selPot");
                var idP = sel.options[sel.selectedIndex].value;

                var selC = document.getElementById("selCultiovo");
                var idC = selC.options[selC.selectedIndex].value;
                var nC = selC.options[selC.selectedIndex].text.toString();


                document.getElementById("cont").innerHTML = "<iframe id='resultado' src='ResultadoReporte.php?idC=" + idC + "&idP=" + idP + "&nU=" + unidad + "'></iframe>";

            }

            function printDiv()
            {
                var divToPrint = document.getElementById('resulta');
                newWin = window.open("");
                newWin.document.write(divToPrint.outerHTML);
                newWin.print();
                newWin.close();
            }
        </script>
    </head>
    <body>
        <div   style="width:200px; border:2px solid #333;" >
            <h1>Seleccione Potrero y Cultivo</h1>
            <form id="fom" name="frmBR" method="GET"  >
                <table width="300px" cellspacing="1" cellpadding="2" class="textosForm">
                    <tr>                   
                        <td width="60px" class="textosForm"> <div align="justify"> Unidad:
                                <a id="unidad"><?php echo $nombreUni ?></a></div> </td>
                    </tr>

                    <td width="90px" class="textosForm"> <div align="justify">Potrero: 
                            <select style="width:130px;" NAME="selPot" id="selPot" SIZE=1 onChange="mostrarCultivos()" required="required">
                                <option value=""></option>
<?php echo $combobit ?>
                            </select> </div> </td>

                    </tr>
                    <td width="90px" class="textosForm"> <div align="justify">Cultivo : <select style="width:130px;" NAME="selCultivo" id="selCultiovo" SIZE=1   required="required">
                            </select> </div> </td>
                    </tr>    

                    </br>
                    <tr>
                        <td colspan="2">
                            <div align="center">
                                <input width="100%"type="button" onclick="mostrar()" name="cmdEnvio" value="CONSULTAR" class="btn">
                            </div>

                        </td>
                    </tr>

                </table></br>
            </form>
        </div>       
        <div id="cont"   align="center" style="left:20%; width:600px; height:600px"> </div>

    </body>
</html>