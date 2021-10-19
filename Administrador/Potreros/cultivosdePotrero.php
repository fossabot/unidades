<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once("../Clases/Persistencia/Persistencia_Cultivomysqli.php");
require_once("../Clases/Persistencia/Persistencia_Unidadmysqli.php");
$perPot = new Persistencia_Potreromysqli();
$perCultivo = new Persistencia_Cultivomysqli();
$uni = $_SESSION['unidad'];
$idPotrero = $_GET['idP'];
$potr = $perPot->potreroxidP($idPotrero);
$es = mysqli_fetch_array($potr);
$NombrePotrero = $es['Nombre'];
$sup = $es['Superficie'];
$fc = $es['fechaCreacion'];
?>    
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <link href ="../Css/estiloTar.css" rel="stylesheet" type="text/css" media="screen" title="default">

        <script>
            var u;
            var idP;
            var np;



            function mostrar() {
                var u = <?php echo $uni ?>;
                var idP = <?php echo $idPotrero ?>;
                var np = <?php echo $NombrePotrero ?>;
                alert(u + " " + idP + " " + np);
            }

            function accionCli(pot, cul) {

                window.location.href = "../Potreros/elegirAcc.php?idP=" + pot + "&idC=" + cul;

            }
            function ocultar() {
                window.location.reload();
                document.getElementById('contenedor').style.display = 'none';
            }

            function nuevoCultivo() {
                if (confirm("¿Iniciar un Nuevo Cultivo?")) {
                    window.location.href = "../Cultivo/altaCultivo.php?unidad=" + u + "&pot=" + idP + "&nomP=" + np + "";
                }
            }

        </script>
    </head>
    <body onLoad="mostrar()">
        <div style="margin-top:20px" align="center" >
            <h1><strong>ACTIVIDADES DE POTRERO </strong></h1></br>
            <h1>Nombre Potrero: <?php echo $NombrePotrero ?> </h1>
            <h1>Superficie Potrero:<?php echo $sup ?> </h1>
            <h1>Fecha de Creación:<?php echo $fc ?> </h1></br>


            <h1><strong>CULTIVOS</strong></h1>
            </br>
            <table class="table" border="1" id="customers">
                <tr style="background-color:#9F6">
                    <th>	Codigo Clave	</th>
                    <th>	Unidad	</th>
                    <th>	Nombre	</th>
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
                $cultivos = $perCultivo->cultivosdePot($uni, $idPotrero);
                while ($es = mysqli_fetch_array($cultivos)) {

                    $cul = $es["idCultivo"];
                    $fechafin = $es["FechaFin"];

                    if ($fechafin == "") {
                        $color = "#CEFFE7";
                    } else {
                        $color = "#FFCECE";
                    }
                    ?>
                    <tr style="background-color:<?php echo $color ?>">
                        <td> <div align="center"><?php echo $es["CodigoClave"] ?> </div></td>
                        <td> <div align="center"><?php echo $uni ?> </div></td>
                        <td> <div align="center"><?php echo $es["Nombre"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["TipoSuelo1"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["TipoSuelo2"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["TipoSuelo3"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["Anosiembra"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["TipoPasturaCultivo"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["Categoria"] ?> </div></td>  
                        <td> <div align="center"><?php echo $es["FechaInicio"] ?> </div></td>  
                        <td> <div align="center"><?php echo $fechafin ?> </div></td>  
                        <td> <div align="center"><a href="#" onClick="accionCli('<?php echo $idPotrero ?>', '<?php echo $cul ?>')"><img src="../Recursos/Imagenes/ingresar.png"></img></a></div></td>   </tr>                                   

                <?php }
                ?>	



                <tr>
                    <td colspan="13">
                        <div align="center"><INPUT type="button" onClick="nuevoCultivo()" value="AGREGAR NUEVO CULTIVO"></div>                  
                    </td>	 
                </tr>	
            </table></br> </br>        

            <h1><strong>EXPERIMENTOS</strong></h1>
            </br>

            <a href="#" onClick="nuevoCultivo()"><img src="../Recursos/Imagenes/agregar.png"></img></a>

        </div>  
        <div  id = 'contenedor'style="display:none;" ></div>
    </body>
</html>