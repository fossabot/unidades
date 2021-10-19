<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once("../Clases/Persistencia/Persistencia_Unidadmysqli.php");
$perPot = new Persistencia_Potreromysqli();
$punidad = new Persistencia_Unidadmysqli();
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
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
            function eliminar(idP) {
                if (confirm('¿Deshabilitar Potrero de la Unidad?')) {
                    window.location.href = "eliminarPotrero.php?idP=" + idP + "";
                }
            }
            function modificar(idP, cor) {
                if (confirm('¿Modificar Potrero?')) {
                    window.location.href = "editarPotrero.php?idP=" + idP + "&unidad=" +<?php echo $uni ?> + "";
                }
            }


            function ocultar() {
                window.location.reload();
                document.getElementById('contenedor').style.display = 'none';
            }

            /************/

            function editar() {

            }

        </script>
    </head>
    <body>
        <div align="center" >

            <h1 style="color:#036"> Gestión de potreros Unidad de <?php echo $nombreUni ?> </h1>
            <table class="table" border="1" id="customers">
                <tr>
                    <th> ID Potrero</th>
                    <th> Nombre</th>
                    <th> Superficie</th>
                    <th> Fecha Creación </th>                    
                    <th> Estado </th>
                    <th> Modificar </th>                                  
                    <th> Deshabilitar </th>
                </tr>	
                <?php
                $potreros = $perPot->potrerosTodo($uni);
                while ($es = mysqli_fetch_array($potreros)) {

                    $estado = $es["Estado"];
                    $idPot = $es["idPotrero"];
                    $Cord = $es["Coordenadas"];
                    ?>
                    <tr>
                        <td> <div align="center"><?php echo $idPot ?> </div></td>
                        <td> <div align="center"><?php echo $es["Nombre"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["Superficie"] ?> </div></td>
                        <td> <div align="center"><?php echo $es["fechaCreacion"] ?> </div></td>                        
                        <td> <div align="center"><?php echo $estado ?> </div></td>


                        <?php if ($estado == "SinCultivo") { ?>	
                            <td> <div align="center"><a href="#" onClick="modificar('<?PHP echo $idPot ?>', '<?PHP echo $Cord ?>')"><img src="../Recursos/Imagenes/modificar.png"></img></a></div></td>
                            <td> <div align="center"><a href="#" onClick="eliminar('<?php echo $idPot ?>')"><img src="../Recursos/Imagenes/eliminar.png"></img></a></div></td>
                        <?php } else {
                            if ($estado == "SinCoordenadas") {
                                ?>			
                                <td> <div align="center"><a href="#" ><img src="../Recursos/Imagenes/alto.png"></img></a></div></td>
                                <td> <div align="center"><a href="#" onClick="eliminar('<?php echo $idPot ?>')"><img src="../Recursos/Imagenes/eliminar.png"></img></a></div></td>
        <?php } else { ?>
                                <td> <div align="center"><a href="#" ><img src="../Recursos/Imagenes/alto.png"></img></a></div></td>
                                <td> <div align="center"><a href="#" ><img src="../Recursos/Imagenes/alto.png"></img></a></div></td>     
                            </tr>
                            <?php
                        }
                    }
                }
                ?>			
            </table>
        </div>

        <div  id = 'contenedor'style="display:none;" ></div>
    </body>
</html>