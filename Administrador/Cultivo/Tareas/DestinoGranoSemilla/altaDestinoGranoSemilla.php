<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
$Fecha = getdate();
//$FechaTxt = $Fecha["mday"] . "/" . $Fecha["mon"] . "/" . $Fecha["year"];
$HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
require_once("../../../Clases/Persistencia/Persistencia_DestinoGranoSemillamysqli.php");
$perTarea = new Persistencia_DestinoGranoSemillamysqli();
$recorrer = $perTarea->cbotanicoporcultivo($idC);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Chacra Con Destino Grano Semilla</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarDestinoGranoSemilla.php" >

            <h1><strong><i>Tarea: destino grano-semilla</i></strong></h1>
            <input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">

            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">	Num Cosecha	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNumCosecha" required="required"> </td>
                </tr>

                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	Componente bot&aacute;nico	</div></td>
                    <td width="260px"> 

                        <select name="txtCB" required>
                            <?php
                            $i = 1;
                            while ($resultado = mysqli_fetch_array($recorrer)) {
                                echo "<option value='" . $resultado['NombreCompBot1'] . "'>" . $resultado['NombreCompBot1'] . "</option>";
                                if ($resultado['NombreCompBot2'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot2'] . "'>" . $resultado['NombreCompBot2'] . "</option>";
                                }
                                if ($resultado['NombreCompBot3'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot3'] . "'>" . $resultado['NombreCompBot3'] . "</option>";
                                }
                                if ($resultado['NombreCompBot4'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot4'] . "'>" . $resultado['NombreCompBot4'] . "</option>";
                                }
                                if ($resultado['NombreCompBot5'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot5'] . "'>" . $resultado['NombreCompBot5'] . "</option>";
                                }
                                if ($resultado['NombreCompBot6'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot6'] . "'>" . $resultado['NombreCompBot6'] . "</option>";
                                }
                                if ($resultado['NombreCompBot7'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot7'] . "'>" . $resultado['NombreCompBot7'] . "</option>";
                                }
                                if ($resultado['NombreCompBot8'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot8'] . "'>" . $resultado['NombreCompBot8'] . "</option>";
                                }
                                if ($resultado['NombreCompBot9'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot9'] . "'>" . $resultado['NombreCompBot9'] . "</option>";
                                }
                                if ($resultado['NombreCompBot10'] !== "") {
                                    echo "<option value='" . $resultado['NombreCompBot10'] . "'>" . $resultado['NombreCompBot10'] . "</option>";
                                }
                            }
                            ?>

                        </select>

                    </td>
                </tr>

                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	M&eacute;todo	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMetodo" required="required"> </td>
                </tr>	
                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	Fecha Corte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="date" name="txtFechaCorte" required="required"> </td>
                </tr>
                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	Hora Corte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtHoraCorte" required="required" value="<?php echo $HoraTxt ?>"> </td>
                </tr>
                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	Maquina Corte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinaCorte"> </td>
                </tr>
                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	Maquinista Corte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinistaCorte"> </td>
                </tr>
                <tr>
                    <td width="74px" class="textosForm"> <div align="center">	Observacion Corte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservacionCorte"> </td>
                </tr>		
                <tr><td width="74px" class="textosForm"> <div align="center">	Fecha Movimiento	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="date" name="txtFechaMovimiento" > </td>
                </tr>		
                <tr><td width="74px" class="textosForm"> <div align="center">	Hora Movimiento	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtHoraMovimiento" > </td>
                </tr>		
                <tr><td width="74px" class="textosForm"> <div align="center">	Maquina Movimiento	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinaMovi" > </td>
                </tr>		
                <tr><td width="74px" class="textosForm"> <div align="center">	Maquinista Movimiento	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinistaMovi" > </td>
                </tr>		
                <tr> <td width="74px" class="textosForm"> <div align="center">	Observacion Movimiento	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservacionMov"> </td>
                </tr>		
                <tr>  <td width="74px" class="textosForm"> <div align="center">	Fecha Cosecha	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="date" name="txtFechaCosecha" > </td>
                </tr>		
                <tr>  <td width="74px" class="textosForm"> <div align="center">	M&aacute;quina	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquina" > </td>
                </tr>		
                <tr><td width="74px" class="textosForm"> <div align="center">	Maquinista	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinista" > </td>
                </tr>		
                <tr> <td width="74px" class="textosForm"> <div align="center">	Rendimiento Sucio	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendimientoSucio"> </td>
                </tr>		
                <tr> <td width="74px" class="textosForm"> <div align="center">	Rendimiento Limpio	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendimientoLimpio" > </td>
                </tr>		

                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="cmdEnvio" value="Guardar" class="boton2">
                        </div>

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>