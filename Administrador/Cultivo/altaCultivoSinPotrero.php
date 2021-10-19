<?php
session_start();
date_default_timezone_set("America/Montevideo");
require_once("../Clases/Persistencia/Persistencia_PotreroMySqli.php");
$perPot = new Persistencia_Potreromysqli();
$uni = $_SESSION['unidad'];
$potreros = $perPot->potrerosTodo($uni);
$combobit = '';
$i = 0;
while ($u = mysqli_fetch_array($potreros)) {
    $i+=1;
    $id = $u["Superficie"];
    $Nombre = $u["Nombre"];
    $combobit .=" <option value='" . $id . "'>" . $Nombre . "</option>";
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Cultivo Sin Potrero Referenciado</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estiloTar.css" />

        <script type="text/javascript">
            function cargarN() {
                var sel = document.getElementById("selNombr");
                var nom = sel.options[sel.selectedIndex].text.toString();
                var superf = sel.options[sel.selectedIndex].value;
                document.getElementById("txtPotrero").value = nom + "";
                document.getElementById("txtSuper").value = superf;
            }
        </script>

    </head>

    <body >
        <div align="center">
            <div class="divborde" style="width:450px; background:#EBEBEB">
                <h1 style="color:#036; font-size:17px;">Nuevo Cultivo</h1>
                <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaCultivo" method="GET" action="agregarCultivoSinPotrero.php" >
                    <table width="334px" cellspacing="0" cellpadding="12" class="textosForm" style="color:#036">
                        <tr>

                            <td width="74px" class="textosForm"> <div align="center">Codigo Clave</div></td>
                            <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCodClave" required> </td>
                        </tr>


                        <td width="74px" class="textosForm"> <div align="center">Nombre</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombre" id="txtNombre" required> </td>
                        </tr>

                        <td width="74px" class="textosForm"> <div align="center">Fecha Inicio</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="date" name="txtFechaInicio" id="txtNombre" requiredvalue="0000-00-00"> </td>
                        </tr>


                        <td width="74px" class="textosForm"> <div align="center">Año de Siembra</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtAnoSiembra" id="txtAnoSiembra" required> </td>
                        </tr>

                        <td width="74px" class="textosForm"> <div align="center"> Nombre Potrero</div></td>
                        <td width="260px"> <input  width="20px"class="cajasTextoForm" type="text" name="txtNombreP" id="txtPotrero"> <select id="selNombr" NAME="selPot" SIZE=1 required="required" onChange="cargarN()">
                                <?php echo $combobit; ?>
                            </select> </td>
                        </tr>

                        <td width="74px" class="textosForm"> <div align="center"> Superficie Potrero</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSuperficieP" id="txtSuper"   contenteditable="false"> </td>
                        </tr>

                        <td width="74px" class="textosForm"> <div align="center">Tipo Pastura/Cultivo</div></td>
                        <td width="260px"> <select NAME="selTipoPC" SIZE=1 required="required">
                                <option value="Cultivo consociado	CC">Cultivo consociado	CC</option>
                                <option value="Verdeo Invernal	VI">Verdeo Invernal	VI</option>
                                <option value="Verdeo estival	VE">Verdeo estival	VE</option>
                                <option value="Pastura bianual	BI">Pastura bianual	BI</option>
                                <option value="Pastura perenne	PE">Pastura perenne	PEi</option>
                                <option value="Cereal de invierno	CI">Cereal de invierno	CI</option>
                                <option value="Cereal de verano	CV">Cereal de verano	CV</option>

                            </select>  </td>
                        </tr>

                        <td width="74px" class="textosForm"> <div align="center">Categoria</div></td>
                        <td width="260px"> <select NAME="selCat" SIZE=1>
                                <option value="Comercial">Comercial</option>
                                <option value="Madre">Madre</option>
                                <option value="Fundacion">Fundacion</option>
                                <option value="Registrada">Registrada</option>
                                <option value="Certificada">Certificada</option>
                            </select>  </td>
                        </tr>

                        <td width="74px" class="textosForm"> <div align="center">Tipo de Suelo 1</div></td>
                        <td width="260px"> <select NAME="selTS1" SIZE=1 >
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

                        <td width="74px" class="textosForm"> <div align="center">Tipo de Suelo 2</div></td>
                        <td width="260px"> <select NAME="selTS2" SIZE=1 >
                                <option value=""></option>
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

                        <td width="74px" class="textosForm"> <div align="center">Tipo de Suelo 3</div></td>
                        <td width="260px"> <select NAME="selTS3" SIZE=1>
                                <option value=""></option>
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
                                    <input type="submit" name="cmdEnvio" value="Guardar" class="boton2">
                                </div>

                            </td>
                        </tr>
                    </table>
                </form>
            </div> </div>
    </body>
</html>