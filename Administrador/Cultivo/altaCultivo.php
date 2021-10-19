<?php
date_default_timezone_set("America/Montevideo");
$idP = $_GET['pot'];
$nP = $_GET['nomP'];
$uni = $_GET['unidad'];
require_once("../Clases/Persistencia/Persistencia_UnidadMySqli.php");
$punidad = new Persistencia_Unidadmysqli();
$uniN = $punidad->unidadxid($uni);
$uniNom;
while ($ci = mysqli_fetch_array($uniN)) {
    $uniNom = $ci["Nombre"];
}
$Fecha = getdate();
$actual = $Fecha["year"];
$combobit = '';
$i = 1960;
while ($i <= $actual) {
    $combobit .=" <option value='" . $i . "'>" . $i . "</option>";
    $i++;
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Cultivo</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estiloTar.css" />
        <script type="text/javascript">
            function autogen() {
                var nombreP = '<?php echo $nP ?>';
                var unidad = '<?php echo $uniNom ?>';
                var selano = document.getElementById("txtAnoSiembra");
                var Ano = selano.options[selano.selectedIndex].value;
                var selTpc = document.getElementById("selTipoPC");
                var codTipPC = selTpc.options[selTpc.selectedIndex].value.toString();
                var cod = codTipPC.split(" ", 1)
                var uni = unidad.split("", 3);
                var u = uni[0] + uni[1] + uni[2];
                document.getElementById("txtCodClave").value = u.toUpperCase() + Ano + cod + nombreP;
            }
        </script>
    </head>

    <body>
        <div align="center" style="background: #aaa" >
            <div class="divborde" style="width:450px; background:#EBEBEB">
                <h1 style="color:#036; font-size:17px;">Nuevo Cultivo</h1>
                <form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaCultivo" method="GET" action="agregarCultivo.php" >
                    <input class="cajasTextoForm" type="text" name="txtPotrero" required  value="<?php echo $idP ?>" hidden="hidden">
                    <table width="630px" cellspacing="0" cellpadding="12" class="textosForm" style="color:#036">
                        <tr>

                            <td width="110px" class="textosForm"> <div align="center">Codigo Clave</div></td>
                            <td width="260px"> <input name="txtCodClave" id="txtCodClave"  readonly value='...'></td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Unidad</div></td>
                        <td width="110px"> <a id="unidad"><?php echo $uniNom ?></a> </td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Nombre</div></td>
                        <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombre" id="txtNombre" required> </td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Año de Siembra</div></td>
                        <td width="260px"> <select NAME="txtAnoSiembra" id="txtAnoSiembra" SIZE=1 onChange="autogen()" required="required">
                                <?php echo $combobit ?>
                            </select>  </td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Tipo Pastura/Cultivo</div></td>
                        <td width="260px"> <select NAME="selTipoPC" id="selTipoPC" SIZE=1  onChange="autogen()" required="required">
                                <option value="CC Cultivo consociado">Cultivo consociado</option>
                                <option value="VI Verdeo Invernal">Verdeo Invernal</option>
                                <option value="VE Verdeo estival">Verdeo estival</option>
                                <option value="PB Pastura bianual">Pastura bianual</option>
                                <option value="PP Pastura perenne">Pastura perenne</option>
                                <option value="CI Cereal de invierno">Cereal de invierno</option>
                                <option value="CV Cereal de verano">Cereal de verano</option>

                            </select>  </td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Categoria</div></td>
                        <td width="260px"> <select NAME="selCat" SIZE=1>
                                <option value="Comercial">Comercial</option>
                                <option value="Madre">Madre</option>
                                <option value="Fundacion">Fundacion</option>
                                <option value="Registrada">Registrada</option>
                                <option value="Certificada">Certificada</option>
                            </select>  </td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Tipo de Suelo 1</div></td>
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

                        <td width="110px" class="textosForm"> <div align="center">Tipo de Suelo 2</div></td>
                        <td width="260px"> <select NAME="selTS2" SIZE=1 >
                                <option value=""></option>
                                <option value="Brunosol Eutrico Haplico">Brunosol Eutrico Haplico</option>

                                <option value="Brunosol Eutrico Luvico">Brunosol Eutrico Luvico</option>
                                <option value="Brunosol Eutrico Tipico">Brunosol Eutrico Tipico</option>
                                <option value="Gleysol">Gleysol</option>
                                <option value="Planosol Eutrico Melanic">Planosol Eutrico Melanic</option>
                                <option value="Solonetz Solodizado">Solonetz Solodizado</option>
                                <option value="Vertisol Ruptico Tipico">Vertisol Ruptico Tipico</option>
                            </select>  </td>
                        </tr>

                        <td width="110px" class="textosForm"> <div align="center">Tipo de Suelo 3</div></td>
                        <td width="260px"> <select NAME="selTS3" SIZE=1>
                                <option value=""></option>
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
                            <td colspan="2">
                                <div align="center">
                                    <input type="submit" name="cmdEnvio" value="GUARDAR CULTIVO" class="boton2">
                                </div>

                            </td>
                        </tr>
                    </table>
                </form>
            </div> </div>
        <div  id = 'contenedor' style="display:none;" ></div>
    </body>
</html>