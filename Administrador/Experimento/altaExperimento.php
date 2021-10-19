<?php
$idP = $_GET['pot'];
$nP = $_GET['nomP'];
$uni = $_GET['unidad'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Experimento</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estiloTar.css" />

    </head>

    <body>
        <div align="center">
            <div class="divborde" style="width:1030px; background:#EBEBEB">
                <h1 style="color:#036; font-size:17px;">Alta Experimento</h1>
                <form id="fom" onSubmit="return submitExperimento(this)" name="frmAltaExperimento" method="GET" action="agregarExperimento.php" >
                    <input class="cajasTextoForm" type="text" name="txtPotrero" required  value="<?php echo $idP ?>" hidden="hidden">
                    <table width="630px" cellspacing="0" cellpadding="12" class="textosForm" style="color:#036">
                        <tr>

                            <td width="74px" class="textosForm"> <div align="center">		CodECR	</div></td>
                            <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCodECR" required> </td>

                            <td width="74px" class="textosForm"> <div align="center">		FechaSiembra	</div></td>
                            <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaSiembra" required> </td>

                            <td width="74px" class="textosForm"> <div align="center">		Autor	</div></td>
                            <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAutor" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot1	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot1" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot3" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot4	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot4" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot5	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot5" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot6	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot6" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot7	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot7" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot8	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot8" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot9	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot9" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NombreCompBot10	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombreCompBot10" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		Grupo de ensayo	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGrupodeensayo" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">Nutriente	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtnutriente" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">Dosis	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtdosis" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">Fuente	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtfuente" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		Fecha Cierre Experiento	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaCierreExperiento" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		CITRICO	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCITRICO" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		SS	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSS" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		PMN	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPMN" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NITRATO	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNITRATO" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		N-NH4	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtN-NH4" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		K	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtK" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		OTRO	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtOTRO" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		Bray1 M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtBray1M2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		Resinas M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtResinasM2" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		CITRICO M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCITRICOM2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		SS M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSSM2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		PMN M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPMNM2" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NITRATO M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNITRATOM2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		N-NH4 M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtN-NH4M2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		K M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtKM2" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		OTRO M2	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtOTROM2" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		Bray1 M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtBray1M3" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		Resinas M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtResinasM3" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		CITRICO M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCITRICOM3" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		SS M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSSM3" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		PMN M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPMNM3" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		NITRATO M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNITRATOM3" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		N-NH4 M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtN-NH4M3" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		K M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtKM3" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		OTRO M3	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtOTROM3" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA B1	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAB1" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA R	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAR" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA C	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAC" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA SS	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDASS" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA PMN	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAPMN" required> </td>
                        </tr>			
                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA N	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAN" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA NH4	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDANH4" required> </td>

                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA K	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAK" required> </td>
                        </tr>				
                        <td width="74px" class="textosForm"> <div align="center">		M ELEGIDA O	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMELEGIDAO" required> </td>
                        </tr>			     



                        <tr>
                            <td colspan="6">
                                <div align="center">
                                    <input type="submit" name="cmdEnvio" value="GUARDAR CULTIVO" class="boton2">
                                </div>

                            </td>
                        </tr>
                    </table>
                </form>
            </div>   </div>   
        <div  id = 'contenedor' style="display:none;" ></div>
    </body>
</html>