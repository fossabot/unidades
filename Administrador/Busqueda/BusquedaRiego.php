<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once('../calendar/classes/tc_calendar.php');
$pPot = new Persistencia_Potreromysqli();
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
$datos = $pPot->potrerosCCdU($uni);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../calendar/calendar.js" type="text/javascript"></script>
        <link href="../calendar/calendar.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css"/>
        
        <script>
            var idPotrero = new Array();
            var CodigoClave = new Array();
            var NombresP = new Array();
            var idCultivo = new Array();

<?php
$combobit = '';
$i = 0;
while ($ci = mysqli_fetch_array($datos)) {
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

                var fi = document.getElementById("fechaInicio").value;
                var ff = document.getElementById("fechaFin").value;

                document.getElementById("contendor").innerHTML = "<iframe id='resultado' src='resultadoRiego.php?f1=" + fi + "&f2=" + ff + "&idC=" + idC + "&nC=" + nC + "'></iframe>";

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
        <div   style="width:380px; height:400px; border:2px solid #333;" >
            <form id="fom" name="frmBR" method="GET"  >
                <table width="300px" cellspacing="1" cellpadding="2" class="textosForm">
                    <tr>                   
                        <td width="60px" class="textosForm"> <div align="justify"> Unidad:
                                <a id="unidad"><?php echo $nombreUni ?></a></div> </td>
                    </tr>

                    <td width="90px" class="textosForm"> <div align="justify">Potrero: <select style="width:130px;" NAME="selPot" id="selPot" SIZE=1 onChange="mostrarCultivos()" required="required">
                                <option value=""></option>
                                <?php echo $combobit ?>
                            </select> </div> </td>

                    </tr>
                    <td width="90px" class="textosForm"> <div align="justify">Cultivo: <select style="width:130px;" NAME="selCultivo" id="selCultiovo" SIZE=1   required="required">
                            </select> </div> </td>
                    </tr>

                    <td width="60px" class="textosForm"> <div align="justify">Fecha Inicio 
                            <?php
                            $myCalendar1 = new tc_calendar("fechaInicio");
                            $myCalendar1->setIcon("../calendar/images/iconCalendar.gif");
                            $myCalendar1->setDate(date('d'), date('m'), 2014);
                            $myCalendar1->setPath("../calendar/");
                            $myCalendar1->setYearInterval(1890, 2080);
                            $myCalendar1->dateAllow('1890-01-01', '2045-05-01', false);
                            $myCalendar1->startMonday(true);
                            $myCalendar1->showWeeks(true);
                            $myCalendar1->setTimezone("Montevideo/Uruguay");
                            $myCalendar1->writeScript();
                            ?>  </div>
                    </td>


                    <td width="60px" class="textosForm"> <div align="justify">Fecha Fin
                            <?php
                            $myCalendar1 = new tc_calendar("fechaFin");
                            $myCalendar1->setIcon("../calendar/images/iconCalendar.gif");
                            $myCalendar1->setDate(date('d'), date('m'), 2014);
                            $myCalendar1->setPath("../calendar/");
                            $myCalendar1->setYearInterval(1890, 2080);
                            $myCalendar1->dateAllow('1890-01-01', '2045-05-01', false);
                            $myCalendar1->startMonday(true);
                            $myCalendar1->showWeeks(true);
                            $myCalendar1->setTimezone("Montevideo/Uruguay"); //Asia/Tokyo, America/Montreal
                            $myCalendar1->writeScript();
                            ?></div>
                        </tr>
                        </br>
                        <tr>
                            <td colspan="2">
                                <div align="center">
                                    <input width="100%"type="button" onclick="mostrar()" name="cmdEnvio" value="CONSULTAR" class="btn">
                                </div>

                            </td>
                        </tr>

                </table>
            </form>
        </div>
        <div id="resulta" align="center">         
            <div id="contendor"   align="center" style="left:20%;"> </div>
        </div>
    </body>
</html>