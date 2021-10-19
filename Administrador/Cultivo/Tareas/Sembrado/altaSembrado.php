<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Sembrado</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarSembrado.php" >

            <h1>Ingreso Información de lo Sembrado</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>


                    <td width="74px" class="textosForm"> <div align="center">	Especie	</div></td>	
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEspecie" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Cultivar	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCultivar" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Nombre Experimental del Cultivar	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreexperimentaldelcultivar" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Densidad de siembra	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDensidaddesiembra" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Lote	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtLote" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Germ	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGerm" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Pureza	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPureza" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Peso 1000	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPeso1000" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Densidad kg&ha	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDensidadkgha" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Fecha Cura Semilla	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaCurasem" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Cura Semilla 1	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCurasemilla1" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Dosis Cura Semilla 1	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDosisCurSem1" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Cura Semilla2	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCurasemilla2" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Dosis Cura Semilla 2	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDosisCurSem2" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Fecha  Inoculante	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaInoc" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Inoculante	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtInoculante" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Dosis Inoculante	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDosisInoc" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Adherente Inoculante	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAdherenteInoc" required="required"> </td>	
                </tr>			
                <td width="74px" class="textosForm"> <div align="center">	Dosis	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDosis" required="required"> </td>	
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