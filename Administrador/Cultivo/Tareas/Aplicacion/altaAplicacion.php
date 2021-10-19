<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Aplicación</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarAplicacion.php" >

            <h1>Ingreso Información de Aplicación</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required  value="<?php echo $idC ?>" hidden="hidden">
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">	Tipo de aplicacion	</div></td>	
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtTipodeaplicacion" required> </td>	
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fecha	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFecha" required value="<?php echo $FechaTxt ?>"> </td>
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Hora	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtHora" required value="-"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Metodo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMetodo" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maquina	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquina" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Maquinista	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinista" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Producto comercial	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtProductocomercial" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Dosis	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDosis" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Unidad	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtUnidad" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Estado del cultivo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEstadodelcultivo" required> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Observaciones	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservaciones" required value="-"> </td>	
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