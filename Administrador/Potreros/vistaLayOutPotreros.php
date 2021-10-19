<?php
session_start();
date_default_timezone_set("America/Montevideo");
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once("../Clases/Persistencia/Persistencia_Cultivomysqli.php");
require_once("../Clases/Persistencia/Persistencia_Unidadmysqli.php");
$perPot = new Persistencia_Potreromysqli();
$perCultivo = new Persistencia_Cultivomysqli();
$nombreUni = $_SESSION['NombreUnidad'];
$uni = $_SESSION['unidad'];
$potrero = $_GET['Potrero'];
$npotrero = $_GET['NPotrero'];
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
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
            h1{color:#036;  text-shadow:
                   -1px -1px 0 #ccc,
                   1px -1px 0 #ccc,
                   -1px 1px 0 #ccc,
                   1px 1px 0 #ccc;}


        </style>
        <script>
            function accionCli(pot, cul) {

                window.location.href = "../Potreros/elegirAcc.php?idP=" + pot + "&idC=" + cul;

            }
            function ocultar() {
                window.location.reload();
                document.getElementById('contenedor').style.display = 'none';
            }
        </script>
    </head>
    <body>
        <div  align="center" >
            <h1 style="color:#036"> Cultivos realizados en Unidad de <?php echo $nombreUni ?> </br> POTRERO: <?php echo $npotrero ?> </h1>
            <table class="table" border="1" id="customers">
                <tr>
                    <th>	Codigo Clave	</th>
                    <th>	Unidad	</th>
                    <th>	Nombre	</th>
                    <th>	Potrero	</th>
                    <th>	Tipo de suelo1	</th>
                    <th>	Tipo de suelo2	</th>
                    <th>	Tipo de suelo3	</th>
                    <th>	Año de siembra	</th>
                    <th>	Tipo Pastura/Cultivo	</th>
                    <th>	Categoria	</th>
                    <th>	Fecha Inicio	</th>                    
                    <th>	Fecha Fin	</th>
                    <th>	Ver	</th>

                </tr>	
                <?php
                $cultivos = $perCultivo->cultivosdePot($uni, $potrero);
                while ($es = mysqli_fetch_array($cultivos)) {
                    $pot = $es["idPotrero"];
                    $cul = $es["idCultivo"];
                    ?>
                    <tr>
                        <td> <div align="center"><?php echo $es["CodigoClave"] ?> </div></td>
                        <td> <div align="center"><?php echo $uni ?> </div></td>
                        <td> <div align="center"><?php echo $es["Nombre"] ?> </div></td>
                        <td> <div align="center"><?php echo $pot ?> </div></td>
                        <td> <div align="center"><?php echo $es["TipoSuelo1"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["TipoSuelo2"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["TipoSuelo3"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["Anosiembra"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["TipoPasturaCultivo"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["Categoria"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["FechaInicio"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["FechaFin"] ?> </div></td>  
                        <td> <div align="center"><a href="#" onClick="accionCli('<?php echo $pot ?>', '<?php echo $cul ?>')"><img src="../Recursos/Imagenes/ingresar.png"></img></a></div></td>                                     

                        <?php }
                    ?>	


            </table>
        </div>

        <div  id = 'contenedor'style="display:none;" ></div>
    </body>
</html>