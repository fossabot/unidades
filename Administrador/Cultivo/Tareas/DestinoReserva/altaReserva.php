<?php
$idC = $_GET['idC'];
$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
$HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Destino Reserva</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarReserva.php" >

            <h1>Ingreso Información de Reserva</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required="required"  value="<?php echo $idC ?>" hidden="hidden">
                <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                    <tr>


                        <td width="74px" class="textosForm"> <div align="center">	Tipo	</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtTipo" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	Fecha de Corte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechadeCorte" required="required" value=""> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	HoraCorte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtHoraCorte" required="required" value=""> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	MaquinaCorte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinaCorte" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	Maquinista	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinista" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	ObservacionesCorte	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservacionesCorte" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	FechaMovimiento1	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaMovimiento1" required="required" value=""> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	HoraMov1	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtHoraMov1" required="required" value=""> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	MaquinaMov1	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinaMov1" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	MaquinistaMov1	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinistaMov1" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	ObservacionesMov1	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservacionesMov1" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	FechaMovimiento2	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaMovimiento2" required="required" value=""> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	HoraMov2	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtHoraMov2" required="required" value=""> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	MaquinaMov2	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinaMov2" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	MaquinistaMov2	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinistaMov2" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	ObservacionesMov2	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservacionesMov2" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	FechaReserva	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFechaReserva" required="required" value="<?php echo $FechaTxt ?>"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	MaquinaReserva	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtMaquinaReserva" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	NumeroReserva	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNumeroReserva" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	UnidadReserva	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtUnidadReserva" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	PesoEstimadoUnidad	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtPesoEstimadoUnidad" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	RendimientoEstimado	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtRendimientoEstimado" required="required"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB1	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB1" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB2	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB2" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB3	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB3" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB4	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB4" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB5	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB5" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB6	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB6" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB7	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB7" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB8	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB8" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB9	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB9" required="required" value="-"> </td>
                    </tr>		
                    <td width="74px" class="textosForm"> <div align="center">	VisualCompB10	</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtVisualCompB10" required="required" value="-"> </td>
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