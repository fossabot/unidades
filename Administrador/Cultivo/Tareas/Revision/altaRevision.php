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
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarRevision.php" >

            <h1>Ingreso Revisión de Malezas, Insectos y Enfermeedades</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">	Fecha de Revision	</div></td>	
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaderevision" required="required" value="<?php echo $FechaTxt ?>" > </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maleza 1	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaleza1" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maleza 2	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaleza2" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maleza 3	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaleza3" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maleza 4	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaleza4" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maleza 5	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaleza5" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Insectos 1	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtInsectos1" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Insectos 2	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtInsectos2" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Insectos 3	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtInsectos3"required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Enfermedades 1	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEnfermedades1" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Enfermedades 2	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEnfermedades2" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Estado del Cultivo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEstadodelcultivo" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Observaciones	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservaciones" required="required"> </td>	
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