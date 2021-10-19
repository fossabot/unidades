<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
$pPot = new Persistencia_Potreromysqli();
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
$datos = $pPot->potrerosCCdU($uni);
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css"/>
    <title>Documento sin título</title>
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
            document.getElementById("contendor").innerHTML = "<iframe  style='top:50px;height: 100%; width:100%; ' src='vistaLayOutPotreros.php?Potrero=" + id + "&NPotrero=" + nom + "'></iframe>";
        }

        function printDiv()
        {
            var divToPrint = document.getElementById('contendor');
            newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }
    </script>
</head>

<body>
    <div   style="width:100%; height:40px; border:2px solid #333;"  align="center" >
        <form id="fom" name="frmBR" method="GET"  >
            <table width="450px" cellspacing="1" cellpadding="1" class="textosForm">
                <td> <div align="center">Potrero:   <select style="width:130px;" NAME="selPot" id="selPot" SIZE=1 onChange="" required="required">                            					  <?php echo $combobit ?>
                        </select>  
                    </div></td>                    
                <td >
                    <div align="center">
                        <input width="100%"type="button" onclick="mostrarCultivos()" name="cmdEnvio" value="CONSULTAR" class="btn">
                    </div>

                </td>
                <td >
                    <div align="center">

                        <input  type="button" value="Imprimir Resultado" onclick="javascript:printDiv();"  class="btn"/>
                    </div>

                </td>

                </tr>                
            </table>

        </form>
    </div>      
    <div id="contendor"   align="center" style=" top:50px;height: 100%; width:100%;"> </div>

</body>
</html>