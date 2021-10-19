<?php
$idC = $_GET['idC'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Siembra</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaSiembra" method="GET" action="agregarSiembra.php" >

            <h1>Ingreso Información de Siembra</h1>
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">ID Cultivo</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCodClave" required="required"  value="<?php echo $idC ?>"> </td>
                </tr>

                <td width="74px" class="textosForm"> <div align="center">Codigo Clave</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCodClave" required="required"> </td>
                </tr>

                <td width="74px" class="textosForm"> <div align="center">	Fecha de siembra	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Fecha de siembra	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Metodo de siembra	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Metodo de siembra	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Sembradora	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Sembradora	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Distancia entre surcos	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Distancia entre surcos	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Sembrador	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Sembrador	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fecha de emergencia	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Fecha de emergencia	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fecha FertilInicial	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	FechaFertilInicial	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fertilizante	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Fertilizante	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Dosis Fertilizante	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	DosisFert	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Unidad Fertilizante	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	UnidadFert	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Observaciones	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	Observaciones	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot1	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	NombreCompBot1	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot2	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	NombreCompBot2	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot3	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	NombreCompBot3	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot4	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	NombreCompBot4	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot5	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	NombreCompBot5	" required="required"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot6	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txt	NombreCompBot6	" required="required"> </td>
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