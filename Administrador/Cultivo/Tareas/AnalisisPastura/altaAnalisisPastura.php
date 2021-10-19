<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta AP</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaAnalisisPastura" method="GET" action="agregarAnalisisPastura.php" >

            <h1>Analisis Suelo</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="400px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>


                    <td width="110px" class="textosForm"> <div align="center">	MS	</div></td>	
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMS" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	Cenizas	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCenizas" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	PC	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPC" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	FDA	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFDA" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	FDN	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFDN" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	N	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtN" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	N-NH4	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNNH4" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	P	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtP" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	Energía	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtEnergia" required="required" value="-"> </td>	
                </tr>			
                <td width="110px" class="textosForm"> <div align="center">	Extrato Etéreo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtExtratoEtereo" required="required" value="-"> </td>	
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