<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta AS</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaAnalisisSuelo" method="GET" action="agregarAnalisisSuelo.php" >

            <h1>Analisis Suelo</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="400px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="110px" class="textosForm"> <div align="center">	ID Laboratorio	</div></td>		
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtIdLab" required="required"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Fecha Muestreo	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaMuestreo" required="required"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Profundidad	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtProfundidad" required="required"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Numero de Pinchazos</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNumPinchazos"  value="-" required="required"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	SS	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSS" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	pH agua	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtpHagua" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	ph KCl	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtphKCl" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	P Bray I	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPBrayI" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	P Resinas	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPresinas" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	P Ac. cítrico	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPaccítrico" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Ca	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCa" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Mg	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMg" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	K	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtK" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Na	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNa" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	B	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtB" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Cu	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCu" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Fe	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFe" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Mn	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMn" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Zn	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtZn" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Sulfatos	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSulfatos" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Textura	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtTextura" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Nitratos	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNitratos" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Amonio	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAmonio" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Carbonatos	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCarbonatos" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Nitrógeno Total	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNitrogenoTotal" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Al	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAl" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Acidéz Titulable	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAcidezTitulable" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Carbono Orgánico	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCarbonoOrganico" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	CE	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCE" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	PMN	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPMN" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	CICpH7	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCICpH7" required="required" value="-"> </td>		
                </tr>				
                <td width="110px" class="textosForm"> <div align="center">	Densidad Aparente	</div></td>		
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDensidadaparente" required="required" value="-"> </td>		
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