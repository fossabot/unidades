<?php
date_default_timezone_set("America/Montevideo");
require_once("../Clases/Persistencia/Persistencia_Experimentomysqli.php");
$perEx = new Persistencia_Experimentomysqli();
$Potrero = $_GET["idP"];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            table {

                font:Arial, Helvetica, sans-serif;

                font-size:16px;

                color:#030;

                border-collapse: collapse;



            }
            body{
                background:#aaa;
            }


            td {

                border-bottom: 5px solid #ccc;

                border-left: 3px dotted #ccc;

                vertical-align: top;

                min-width:100px;

                padding: 1px;

                border-style:groove;

            }



            tr {

                background: #ACD7D7; 

                border-left: 1px dotted #EBEBEB;

            }

            th {

                background: #036;

                color:#FFF;

            }

            tr:hover td{

                background: #ACC1D1;

                color:#036;
            }



        </style>
        <script>
            function eliminar(id, cod) {
                if (confirm('¿Eliminar Experimento ' + cod + '?')) {
                    window.location.href = "eliminarExperimento.php?idE=" + id + "";
                }
            }
            function cerrar(id, cod) {
                if (confirm('¿Finalizar Experimento ' + cod + '?')) {
                    window.location.href = "finalizarExperimento.php?idE=" + id + "";
                }
            }
        </script>

    </head>
    <body>
        <div  align="center" >
            <h1 style="color:#036"> Datos de experimentos realizados</h1>
            <table class="table" border="1" id="customers">
                <tr>	
                    <th>	Estado	</th>
                    <th>	Eliminar	</th>
                    <th>	CodECR	</th>
                    <th>	FechaSiembra	</th>
                    <th>	Autor	</th>
                    <th>	NombreCompBot1	</th>
                    <th>	NombreCompBot2	</th>
                    <th>	NombreCompBot3	</th>
                    <th>	NombreCompBot4	</th>
                    <th>	NombreCompBot5	</th>
                    <th>	NombreCompBot6	</th>
                    <th>	NombreCompBot7	</th>
                    <th>	NombreCompBot8	</th>
                    <th>	NombreCompBot9	</th>
                    <th>	NombreCompBot10	</th>
                    <th>	Grupodeensayo	</th>
                    <th>	nutriente	</th>
                    <th>	dosis	</th>
                    <th>	fuente	</th>
                    <th>	FechaCierreExperiento	</th>
                    <th>	CITRICO	</th>
                    <th>	SS	</th>
                    <th>	PMN	</th>
                    <th>	NITRATO	</th>
                    <th>	N-NH4	</th>
                    <th>	K	</th>
                    <th>	OTRO	</th>
                    <th>	Bray1M2	</th>
                    <th>	ResinasM2	</th>
                    <th>	CITRICOM2	</th>
                    <th>	SSM2	</th>
                    <th>	PMNM2	</th>
                    <th>	NITRATOM2	</th>
                    <th>	N-NH4M2	</th>
                    <th>	KM2	</th>
                    <th>	OTROM2	</th>
                    <th>	Bray1M3	</th>
                    <th>	ResinasM3	</th>
                    <th>	CITRICOM3	</th>
                    <th>	SSM3	</th>
                    <th>	PMNM3	</th>
                    <th>	NITRATOM3	</th>
                    <th>	N-NH4M3	</th>
                    <th>	KM3	</th>
                    <th>	OTROM3	</th>
                    <th>	MELEGIDAB1	</th>
                    <th>	MELEGIDAR	</th>
                    <th>	MELEGIDAC	</th>
                    <th>	MELEGIDASS	</th>
                    <th>	MELEGIDAPMN	</th>
                    <th>	MELEGIDAN	</th>
                    <th>	MELEGIDANH4	</th>
                    <th>	MELEGIDAK	</th>
                    <th>	MELEGIDAO	</th>

                </tr>	
                <?php
                $potreros = $perEx->experimentos($Potrero);
                while ($es = mysqli_fetch_array($potreros)) {
                    $estado = $es["Estado"]
                    ?>
                    <tr>
                        <?php if ($estado == "Abierto") { ?>	
                            <td> <div align="center"><a href="#" onClick="cerrar('<?PHP echo $es['idExperimento'] ?>', '<?php echo $es["CodECR"] ?>')">     			<img src="../Recursos/Imagenes/abierto.png"></img></a></div></td>
                            <td> <div align="center"><a href="#" ><img src="../Recursos/Imagenes/alto.png"></img></a></div></td>
                        <?php } else { ?>
                            <td> <div align="center"><img src="../Recursos/Imagenes/cerrado.png"></img></div></td>      <td> <div align="center"><a href="#" onClick="eliminar('<?php echo $es["idExperimento"] ?>', '<?php echo $es["CodECR"] ?> ')"><img src="../Recursos/Imagenes/eliminar.png"></img></a></div></td>

                            <?php
                        }
                        ?>
                        <td> <div align="center"><?php echo $es["CodECR"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["FechaSiembra"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["Autor"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot1"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot4"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot5"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot6"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot7"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot8"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot9"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NombreCompBot10"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["Grupodeensayo"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["nutriente"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["dosis"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["fuente"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["FechaCierreExperiento"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["CITRICO"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["SS"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["PMN"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NITRATO"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NNH4"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["K"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["OTRO"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["Bray1M2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["ResinasM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["CITRICOM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["SSM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["PMNM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NITRATOM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NNH4M2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["KM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["OTROM2"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["Bray1M3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["ResinasM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["CITRICOM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["SSM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["PMNM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NITRATOM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["NNH4M3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["KM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["OTROM3"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAB1"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAR"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAC"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDASS"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAPMN"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAN"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDANH4"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAK"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["MELEGIDAO"] ?> </div></td>

                    </tr>
                <?php }
                ?>			
            </table>
        </div>

        <div  id = 'contenedor'style="display:none;" ></div>
    </body>
</html>