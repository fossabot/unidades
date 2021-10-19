<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Siembra</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarLaboreo.php" >

            <h1>Ingreso Información de Laboreo</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">	Fecha	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFecha" required="required" value="<?php echo $FechaTxt ?>"> </td></tr>

                <td width="74px" class="textosForm"> <div align="center">	Equipo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEquipo" required="required"> </td>	
                </tr>	</tr>	

                <td width="74px" class="textosForm"> <div align="center">	Maquinista	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinista" required="required"> </td>	
                </tr>	</tr>		



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