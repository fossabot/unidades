<?php
date_default_timezone_set("America/Montevideo");
$id = $_GET['idC'];
$idP = $_GET['idP'];
require_once("../Clases/Persistencia/Persistencia_CultivoMySqli.php");
$pCultivo = new Persistencia_Cultivomysqli();
$cultivo = $pCultivo->cultivoxid($id);
$ci = mysqli_fetch_array($cultivo);
$idCul = $ci["idCultivo"];
$nomC = $ci["Nombre"];
$cc = $ci["CodigoClave"];
$ts1 = $ci["TipoSuelo1"];
$ts2 = $ci["TipoSuelo2"];
$ts3 = $ci["TipoSuelo3"];
$cat = $ci["Categoria"];
$tpc = $ci["TipoPasturaCultivo"];
$as = $ci["Anosiembra"];
$fechainicio = $ci["FechaInicio"];
$fechafin = $ci["FechaFin"];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Modifcar Cultivo</title>
        <link rel="stylesheet" type="text/css" href="../CSS/styles.css" />
    </head>

    <body>

        <h1>Modificar Cultivo</h1>
        <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaCultivo" method="GET" action="modificoCultivo.php" >
            <input class="cajasTextoForm" type="text" name="idCultivo" required  value="<?php echo $idCul ?>" hidden="hidden">
            <input class="cajasTextoForm" type="text" name="idPotrero" required  value="<?php echo $idP ?>" hidden="hidden">
            <table width="630px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">Fecha Inicio</div></td>
                    <td width="260px"> <input type="date" name="txtFI" id="txtFI" required value='<?php echo $fechainicio ?>'> </td>
                </tr>
                <tr>
                    <td width="74px" class="textosForm"> <div align="center">Fecha Fin</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFF" id="txtFF" value='<?php echo $fechafin ?>' readonly="readonly"> </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Nombre</div></td>
                    <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombre" id="txtNombre" required value='<?php echo $nomC ?>'> </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Año de Siembra</div></td>
                    <td width="260px">  
                        <input class="cajasTextoForm" NAME="txtAnoSiembra" id="txtAnoSiembra"  required="required" value='<?php echo $as ?>'> </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Tipo Pastura/Cultivo</div></td>
                    <td width="260px"> <select NAME="selTipoPC" id="selTipoPC" SIZE=1  onChange="autogen()" required="required">
                            <option value="<?php echo $tpc ?>"><?php echo $tpc ?></option>
                            <option value="VI Verdeo Invernal">Verdeo Invernal</option>
                            <option value="VE Verdeo estival">Verdeo estival</option>
                            <option value="PB Pastura bianual">Pastura bianual</option>
                            <option value="PP Pastura perenne">Pastura perenne</option>
                            <option value="CI Cereal de invierno">Cereal de invierno</option>
                            <option value="CV Cereal de verano">Cereal de verano</option>
                            <option value="AV Avena">Avena</option>
                        </select>  </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Categoria</div></td>
                    <td width="260px"> <select NAME="selCat" SIZE=1>
                            <option value="<?php echo $cat ?>"><?php echo $cat ?></option>
                            <option value="Comercial">Comercial</option>
                            <option value="Madre">Madre</option>
                            <option value="Fundacion">Fundacion</option>
                            <option value="Registrada">Registrada</option>
                            <option value="Certificada">Certificada</option>
                        </select>  </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Tipo de Suelo 1</div></td>
                    <td width="260px"> <select NAME="selTS1" SIZE=1 >
                            <option value="<?php echo $ts1 ?>"><?php echo $ts1 ?></option>
                            <option value="Brunosol Eutrico Haplico">Brunosol Eutrico Haplico</option>

                            <option value="Brunosol Eutrico Luvico">Brunosol Eutrico Luvico</option>
                            <option value="Brunosol Eutrico Tipico">Brunosol Eutrico Tipico</option>
                            <option value="Gleysol">Gleysol</option>
                            <option value="Planosol Eutrico Melanic">Planosol Eutrico Melanic</option>
                            <option value="Solonetz Solodizado">Solonetz Solodizado</option>
                            <option value="Vertisol Ruptico Tipico">Vertisol Ruptico Tipico</option>
                        </select>  </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Tipo de Suelo 2</div></td>
                    <td width="260px"> <select NAME="selTS2" SIZE=1 >
                            <option value="<?php echo $ts2 ?>"><?php echo $ts2 ?></option>
                            <option value="">Sin tipo de suelo 2</option>
                            <option value="Brunosol Eutrico Haplico">Brunosol Eutrico Haplico</option>                        
                            <option value="Brunosol Eutrico Luvico">Brunosol Eutrico Luvico</option>
                            <option value="Brunosol Eutrico Tipico">Brunosol Eutrico Tipico</option>
                            <option value="Gleysol">Gleysol</option>
                            <option value="Planosol Eutrico Melanic">Planosol Eutrico Melanic</option>
                            <option value="Solonetz Solodizado">Solonetz Solodizado</option>
                            <option value="Vertisol Ruptico Tipico">Vertisol Ruptico Tipico</option>
                        </select>  </td>
                </tr>
                <tr>
                    <td width="110px" class="textosForm"> <div align="center">Tipo de Suelo 3</div></td>
                    <td width="260px"> <select NAME="selTS3" SIZE=1>
                            <option value="<?php echo $ts3 ?>"><?php echo $ts3 ?></option>
                            <option value="">Sin tipo de suelo 3</option>
                            <option value="Brunosol Eutrico Haplico">Brunosol Eutrico Haplico</option>
                            <option value="Brunosol Eutrico Haplicp">Brunosol Eutrico Haplicp</option>
                            <option value="Brunosol Eutrico Luvico">Brunosol Eutrico Luvico</option>
                            <option value="Brunosol Eutrico Tipico">Brunosol Eutrico Tipico</option>
                            <option value="Gleysol">Gleysol</option>
                            <option value="Planosol Eutrico Melanic">Planosol Eutrico Melanic</option>
                            <option value="Solonetz Solodizado">Solonetz Solodizado</option>
                            <option value="Vertisol Ruptico Tipico">Vertisol Ruptico Tipico</option>
                        </select>  </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="cmdEnvio" value="MODIFICAR CULTIVO" class="boton2">
                        </div>

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>