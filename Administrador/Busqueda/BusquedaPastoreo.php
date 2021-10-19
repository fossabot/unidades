<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once('../calendar/classes/tc_calendar.php');
$pPot = new Persistencia_Potreromysqli();
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
$datos = $pPot->potrerosTododeUni($uni);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../calendar/calendar.js" type="text/javascript"></script>
        <link href="../calendar/calendar.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css"/>
        
        <script>
            var idPotrero = new Array ();
            var CodigoClave = new Array ();
            var NombresP = new Array ();
            var idCultivo = new Array ();
            var Años = new Array ();
            var TPC = new Array ();
            var Cultivo;
            var nCultivo;
            var idPot;
<?php
$combobit = '';
$i = 0;
while ($ci = mysqli_fetch_array($datos)) {
    $id = $ci["idPotrero"];
    $cultivo = $ci["CodigoClave"];
    $nom = $ci["Nombre"];
    $idCultivo = $ci["idCultivo"];
    $Ano = $ci["Anosiembra"];
    $TPC = $ci["TipoPasturaCultivo"];
    echo 'idPotrero[' . $i . '] = "' . $id . '";';
    echo 'CodigoClave[' . $i . '] = "' . $cultivo . '";';
    echo 'NombresP[' . $i . '] = "' . $nom . '";';
    echo 'idCultivo[' . $i . '] = "' . $idCultivo . '";';
    echo 'Años[' . $i . '] = "' . $Ano . '";';
    echo 'TPC[' . $i . '] = "' . $TPC . '";';
    $combobit .=" <option value='" . $id . "'>" . $nom . "</option>";
    $i++;
}
?>
            function mostrarCultivos(){
            var sel = document.getElementById("selPot");
            var nom = sel.options[sel.selectedIndex].text.toString();
            var id = sel.options[sel.selectedIndex].value;
            document.getElementById("selA").options.length = 0;
            document.getElementById("TPC").options.length = 0;
            document.getElementById("selA").options[document.getElementById("selA").options.length] = new Option("", "");
            for (i = 0; i < idPotrero.length; i++){
            if (idPotrero[i] == id){
            document.getElementById("selA").options[document.getElementById("selA").options.length] = new Option(Años[i], Años[i]);
            }
            }
            }
            function mostrarTipo(){

            var sel = document.getElementById("selA");
            var nom = sel.options[sel.selectedIndex].text.toString();
            var id = sel.options[sel.selectedIndex].value;
            document.getElementById("TPC").options.length = 0;
            document.getElementById("TPC").options[document.getElementById("TPC").options.length] = new Option("","");
            for (i = 0; i < Años.length; i++){
            if (Años[i] == id){
            document.getElementById("TPC").options[document.getElementById("TPC").options.length] = new Option(TPC[i], TPC[i]);
            }
            }
            }
            function cargarCultivo(){

            var sel = document.getElementById("TPC");
            var nom = sel.options[sel.selectedIndex].text.toString();
            var id = sel.options[sel.selectedIndex].value;
            for (i = 0; i < Años.length; i++){
            if (TPC[i] == id){
            cultivo = idCultivo[i];
            idPot = idPotrero[i];
            nCultivo = CodigoClave[i];
            }
            }
            }
            function mostrar(){
            var selP = document.getElementById("selPot");
            var pot = selP.options[selP.selectedIndex].value;
            var selA = document.getElementById("selA");
            var ao = selA.options[selA.selectedIndex].value;
            var selT = document.getElementById("TPC");
            var tpc = selT.options[selT.selectedIndex].value;
            document.getElementById("contendor").innerHTML = "<iframe id='resultado' src='resultadoPastoreo.php?idP=" + idPot + "&tp=" + tpc + "&Asiem=" + ao + "'></iframe>";
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
                <table width="380px" cellspacing="1" cellpadding="2" class="textosForm">
                    <tr>                   
                        <td width="110px" class="textosForm"> <div align="justify"> Unidad:
                                <a id="unidad"><?php echo $nombreUni ?></a></div> </td>

                    </tr>              
                    <td width="110px" class="textosForm"> 
                        <div align="justify">Potrero: 
                            <select NAME="selPot" id="selPot" SIZE=1 onChange="mostrarCultivos()" required="required"  style="width:130px">
                                <option value=""></option>
<?php echo $combobit ?>
                            </select> </div> </td>					
                    </tr>

                    <td width="210px" class="textosForm">
                        <div align="justify">Año: 
                            <select NAME="selA" id="selA" SIZE=1   required="required" onchange="mostrarTipo()" style="width:130px"> 
                                <option value="" ></option>
                            </select> </div> </td>
                    </tr>

                    <td width="360px" class="textosForm"> 
                        <div align="justify">Tipo Pastura/Cultivo: 
                            <select NAME="selTPC" id="TPC" SIZE=1   required="required" onchange="cargarCultivo()" style="width:130px"> 
                                <option value=""></option>
                            </select> 
                        </div> </td>                    
                    </tr>
                    </br>
                    </br>
                    <tr>
                        <td colspan="4">
                            <div align="center">
                                <input width="100%" type="button" onclick="mostrar()" name="cmdEnvio" value="CONSULTAR" class="btn" />
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