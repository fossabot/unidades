<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Riego</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarRiego.php" >

            <h1>Ingreso Riego</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>


                    <td width="74px" class="textosForm"> <div align="center">	Fecha	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFecha" required="required" value="<?php echo $FechaTxt ?>"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center"> Tipo de Riego </div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMetodo" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Volumen	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVolumen" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	CriteriodeRiego	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCriterioderiego" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Equipo de Riego	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEquipoderiego" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fuente de Agua	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFuentedeagua" required="required"> </td>
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