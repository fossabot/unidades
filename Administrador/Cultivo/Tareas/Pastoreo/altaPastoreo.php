<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Pastoreo</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaPastoreo" method="GET" action="agregarPastoreo.php" >


            <h1>Nuevo Pastoreo</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
            <table width="100%" cellspacing="0" cellpadding="12" class="table">	<tr>

                    <td></td>
                    <td colspan="5"><h1>Ingreso Información de Pastoreo</h1>
                    </td>	
                </tr>


                <td width="260px" class="textosForm"> <div align="center">	Año Vida	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAnoVida" required="required"> </td>	

                <td width="260px" class="textosForm"> <div align="center">	Número de pastoreo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNúmerodepastoreo" required="required"> </td>	

                <td width="260px" class="textosForm"> <div align="center">	Fecha Inicio	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaInicio" required="required"> </td>	
                </tr>			
                <td width="260px" class="textosForm"> <div align="center">	Fecha Fin	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaFin" required="required"> </td>	

                <td width="260px" class="textosForm"> <div align="center">	Categoria	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCategoria" required="required"> </td>	

                <td width="260px" class="textosForm"> <div align="center">	Num Animales	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNumAnimales" required="required"> </td>	
                </tr>			
                <td width="260px" class="textosForm"> <div align="center">	Metodo Pastoreo	</div></td>	
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMetodoPastoreo" required="required"> </td>	
                </tr>			

                <td></td>
                <td colspan="5"> <h1>Ingreso Información de Composición Bótanica</h1> </td>	
                </tr>


                <td width="74px" class="textosForm"> <div align="center">	Número de pastoreo	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNumerodepastoreo" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	Fecha Muestreo	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaMuestreo" required="required"> </td>
                </tr>
                <td width="74px" class="textosForm"> <div align="center">	VisuCB1	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB1" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB1	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB1" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB1	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB1" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB2	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB2" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB2	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB2" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB2	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB2" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB3	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB3" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB3	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB3" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB3	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB3" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB4	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB4" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB4	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB4" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB4	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB4" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB5	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB5" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB5	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB5" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB5	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB5" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB6	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB6" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB6	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB6" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB6	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB6" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB7	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB7" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB7	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB7" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB7	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB7" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB8	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB8" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB8	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB8" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB8	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB8" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB9	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB9" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB9	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB9" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB9	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB9" required="required" value="-"> </td>		
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	VisuCB10	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisuCB10" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPVCB10	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPVCB10" required="required" value="-"> </td>		

                <td width="74px" class="textosForm"> <div align="center">	GraviPSCB10	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtGraviPSCB10" required="required" value="-"> </td>		
                </tr>	




                <td></td>
                <td colspan="5"><h1>Ingreso Información de Rendimiento Forraje</h1></td>	
                </tr>

                <td width="74px" class="textosForm"> <div align="center">	Fecha Muestreo	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaMuestreo" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	Tipo	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtTipo" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	Metodo	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMetodo" required="required"> </td>
                </tr>	
                <td width="74px" class="textosForm"> <div align="center">	Largo Area	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtLargoArea" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	Ancho Area	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAnchoArea" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	NumMuestras	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNumMuestras" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	MS	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMS" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	RendimientoPromedio	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendimientoPromedio" required="required"> </td>

                <td width="74px" class="textosForm"> <div align="center">	Desvio	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDesvio" required="required"> </td>
                </tr>						
                <td width="74px" class="textosForm"> <div align="center">	RendMuestra1	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra1" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra1	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra1" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra1	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra1" required="required" value="-"> </td>

                </tr>						
                <td width="74px" class="textosForm"> <div align="center">	RendMuestra2	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra2" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra2	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra2" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra2	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra2" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra3	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra3" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra3	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra3" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra3	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra3" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra4	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra4" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra4	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra4" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra4	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra4" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra5	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra5" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra5	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra5" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra5	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra5" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra6	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra6" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra6	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra6" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra6	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra6" required="required" value="-"> </td>

                </tr>						
                <td width="74px" class="textosForm"> <div align="center">	RendMuestra7	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra7" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra7	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra7" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra7	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra7" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra8	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra8" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra8	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra8" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra8	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra8" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra9	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra9" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra9	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra9" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra9	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra9" required="required" value="-"> </td>
                </tr>						

                <td width="74px" class="textosForm"> <div align="center">	RendMuestra10	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendMuestra10" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PVMuestra10	</div></td>				
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPVMuestra10" required="required" value="-"> </td>						

                <td width="74px" class="textosForm"> <div align="center">	PSMuestra10	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPSMuestra10" required="required" value="-"> </td>

                </tr>						




                </tr>		

                <tr>
                    <td colspan="6">
                        <div align="center">
                            <input type="submit" name="cmdEnvio" value="Guardar" class="boton2">
                        </div>

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>