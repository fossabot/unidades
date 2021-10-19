<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once("../Clases/Persistencia/Persistencia_Unidadmysqli.php");
require_once("../Clases/Persistencia/Persistencia_Cultivomysqli.php");
$perPot = new Persistencia_Potreromysqli();
$punidad = new Persistencia_Unidadmysqli();
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
$potreros = $perPot->potrerosTodo($uni);
$pcultivo = new Persistencia_Cultivomysqli();
?>

<html>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style type="text/css">
            body {  padding-left:  0px;   padding-right: 0px;  margin-left:  0px;  margin-right: 0px;  margin-top:1px;  border: 1x solid black;}
            #map-canvas { position: absolute; background: transparent; height:100%; width: 100%; left:0; right: 0; bottom: 0;top:0px;}
            .windowBox{ position: absolute; left: 38%; top: 18%; width: 700px; height:560px; margin: -100px 0 0 -270px;-webkit-box-shadow: 0px 0px 300px 200px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 300px 200px rgba(0,0,0,0.75);box-shadow: 0px 0px 300px 200px rgba(0,0,0,0.75); z-index:1; }
            #link { top:2%;  left:66%;position: absolute;color: #000 ; z-index:19999; font-family: 'Marcellus', serif; font-size: 1.1em; font-weight:50%; margin: 0px 0px; box-shadow: 1px 1px 1px 1px  #E9E9E9; text-align:center; height:auto;word-wrap: break-word;vertical-align:middle;}  
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
            function accionCli(estado, pot, np, cultivo) {
                var u = <?php echo $uni ?>;
                var idP = pot;
                var estadoP = estado;
                if (estadoP == "SinCultivo") {
                    if (confirm("El Potrero Seleccionado se encuentra sin Cultivo Iniciado. ¿Desea Iniciar un Nuevo Cultivo en él?")) {
                        window.location.href = "../Cultivo/altaCultivo.php?unidad=" + u + "&pot=" + idP + "&nomP=" + np + "";
                    }
                } else {
                    window.location.href = "elegirAcc.php?idP=" + idP + "&idC=" + cultivo;
                }

            }
            function ocultar() {
                window.location.reload();
                document.getElementById('contenedor').style.display = 'none';
            }
        </script>
    </head>
    <body>
        <div  align="center" >

            <h1 style="color:#036"> Potreros pertenecientes a Unidad de <?php echo $nombreUni ?> </h1>
            <table class="table" border="1" id="customers">
                <tr>
                    <th> ID Potrero</th>
                    <th> Nombre</th>
                    <th> Superficie</th>
                    <th> Fecha Creación </th>                    
                    <th> Estado </th>                                  
                    <th> Acción </th>
                </tr>	
                <?php
                while ($es = mysqli_fetch_array($potreros)) {

                    $estado = $es["Estado"];
                    $idPot = $es["idPotrero"];
                    $nombrP = $es["Nombre"];
                    ?>

                    <tr>
                        <td> <div align="center"><?php echo $idPot ?> </div></td>
                        <td> <div align="center"><?php echo $nombrP ?> </div></td>
                        <td> <div align="center"><?php echo $es["Superficie"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["fechaCreacion"] ?> </div></td>                        
                        <td> <div align="center"><?php echo $estado ?> </div></td>
                        <?php if ($estado == "SinCultivo") { ?>	
                            <td> <div align="center"><a href="#" onClick="accionCli('<?php echo $estado ?>', '<?php echo $idPot ?>', '<?php echo $nombrP ?>', '')">Cargar Cultivo</a></div></td>                                     
                        <?php
                        } else {
                            $cult = $pcultivo->cultivoxiddePot($idPot);
                            $c = mysqli_fetch_array($cult);
                            ?>	

                            <td> <div align="center"><a href="#" onClick="accionCli('<?php echo $estado ?>', '<?php echo $idPot ?>', '<?php echo $nombrP ?>', '<?php echo $c["idCultivo"] ?>')">   Ver Cultivo</a></div></td>      
                        </tr>
                        <?php
                    }
                }
                ?>			
            </table>
        </div>

        <div  id = 'contenedor'style="display:none;" ></div>
    </body>
</html>