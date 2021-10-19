<?php
$id = $_GET['idP'];
$idCultivo = $_GET['idC'];
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once("../Clases/Persistencia/Persistencia_Cultivomysqli.php");
require_once("../Clases/Persistencia/Persistencia_Tareamysqli.php");
$perPot = new Persistencia_Potreromysqli();
$potreros = $perPot->potrerosxid($id);
$perCultivo = new Persistencia_Cultivomysqli();
$cultivo = $perCultivo->cultivoxid($idCultivo);

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

$ci = mysqli_fetch_array($potreros);
$nom = $ci["Nombre"];
$sup = $ci["Superficie"];
$est = $ci["Estado"];

$perTarea = new Persistencia_Tareamysqli();
$tareasdp = $perTarea->buscarT($idCul);
$divtareas = '';
$i = 0;
$infor = array();
$idTareaPrimera = 0;

while ($ci = mysqli_fetch_array($tareasdp)) {
    $idTarea = $ci['idTarea'];
    if ($i == 0) {
        $idTareaPrimera = $idTarea;
    }
    $info = $ci['data'];
    $fecha = $ci['Fecha'];
    $nombre = $ci['NombreCat'];
    $datos = $nombre;
    $datos.=$fecha;
    $divtareas +="<a  class='button' id=" . $idTarea . " href='javascript:void(0)'  onclick='javascript:mostrarInfo(" . $idTarea . ")'>" . $fecha . " </br> " . $nombre . "<a>";
    $infor[$idTarea] = $datos;
    $i++;
}
?>

<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>Gestion de Cultivo</title>
        <script language="JavaScript1.2">
            window.moveTo(0, 0);
            if (document.all) {
                top.window.resizeTo(screen.availWidth, screen.availHeight);
            } else if (document.layers || document.getElementById) {
                if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
                    top.window.outerHeight = screen.availHeight;
                    top.window.outerWidth = screen.availWidth;
                }
            }
        </script>

        <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css">

        <script>
            var idCult =<?php echo $idCultivo ?>;
            var idP =<?php echo $id ?>;
            var tareaUno =<?php echo $idTareaPrimera ?>;
            var TareaAG = tareaUno;

            function cerrarC() {
                if (confirm("�Cerrar Cultivo?")) {
                    window.location.href = "../Cultivo/cerrarCultivo.php?idCul=" + idCult + "&idP=" + idP + "";
                }
            }

            function mostrarInfo(pos) {
                document.getElementById("" + TareaAG + "").style.backgroundColor = "#A3A352";
                document.getElementById("" + TareaAG + "").style.color = "#002D00";
                TareaAG = pos;
                document.getElementById("" + pos + "").style.backgroundColor = "#036";
                document.getElementById("" + pos + "").style.color = "#FFF";
            }

            function verTarea() {
                if (TareaAG != tareaUno) {
                    document.getElementById('contenedor').style.display = "block";
                    document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; 'src='vistaTarea.php?idT=" + TareaAG + "'></iframe>";
                } else {
                    alert("No hay Tarea Seleccionada");
                }
            }

            function eliminarTarea() {
                if (TareaAG != tareaUno) {
                    if (confirm("¿Eliminar Tarea Seleccionada?")) {
                        window.location.href = "eliminarTarea.php?idC=" + idCult + "&idP=" + idP + "&idT=" + TareaAG;
                    }
                } else {
                    alert("No hay Tarea Seleccionada");
                }

            }

            function modificarCultivo() {
                if (confirm("�Modifica datos del cultivo?")) {
                    window.location.href = "../Cultivo/modificarCultivo.php?idC=" + idCult + "&idP=" + idP;
                }
            }

            function ocultar() {
                document.getElementById("contenedor").style.display = "none";
                window.location.reload();
                TareaAG = "";
            }

            function nuevaT() {
                var inde = document.getElementById("sel").value;
                if (inde == "1") {
                    if (confirm("�Ingresar Información de Siembra?")) {
                        document.getElementById('contenedor').style.display = "block";
                        document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#CCC; padding: 1em 0em;'src='../Cultivo/Tareas/Siembra/altaSiembra.php?idC=" + idCult + "'></iframe>";
                    }
                } else {
                    if (inde == "2") {
                        if (confirm("¿Ingresar información de lo que Sembró?")) {
                            document.getElementById('contenedor').style.display = "block";
                            document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#CCC; padding: 1em 0em;'src='../Cultivo/Tareas/Sembrado/altaSembrado.php?idC=" + idCult + "'></iframe>";
                        }
                    } else {
                        if (inde == "3") {
                            if (confirm("¿Ingresar Información de Riego?")) {
                                document.getElementById('contenedor').style.display = "block";
                                document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/Riego/altaRiego.php?idC=" + idCult + "'></iframe>";
                            }
                        } else {

                            if (inde == "4") {

                                if (confirm("¿Ingresar Revisión?")) {

                                    document.getElementById('contenedor').style.display = "block";

                                    document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background: #EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/Revision/altaRevision.php?idC=" + idCult + "'></iframe>";

                                }

                            } else {

                                if (inde == "5") {

                                    if (confirm("¿Ingresa Aplicación?")) {

                                        document.getElementById('contenedor').style.display = "block";

                                        document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/Aplicacion/altaAplicacion.php?idC=" + idCult + "'></iframe>";

                                    }

                                } else {

                                    if (inde == "6") {

                                        if (confirm("¿Ingresa Información de Laboreo?")) {

                                            document.getElementById('contenedor').style.display = "block";

                                            document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/Laboreo/altaLaboreo.php?idC=" + idCult + "'></iframe>";

                                        }

                                    } else {

                                        if (inde == "7") {

                                            if (confirm("¿Usa la Chacra con Destino a Grano, Semilla?")) {

                                                document.getElementById('contenedor').style.display = "block";

                                                document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/DestinoGranoSemilla/altaDestinoGranoSemilla.php?idC=" + idCult + "'></iframe>";

                                            }

                                        } else {

                                            if (inde == "8") {

                                                if (confirm("¿Ingresa Análisis de Suelo?")) {

                                                    document.getElementById('contenedor').style.display = "block";

                                                    document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'>Cerrar</a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/AnalisisdeSuelo/altaAnalisisSuelo.php?idC=" + idCult + "'></iframe>";

                                                }

                                            } else {

                                                if (inde == "9") {

                                                    if (confirm("¿Ingresa Nuevo Pastoreo?")) {

                                                        document.getElementById('contenedor').style.display = "block";

                                                        document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/Pastoreo/altaPastoreo.php?idC=" + idCult + "'></iframe>";

                                                    }

                                                } else {

                                                    if (inde == "10") {

                                                        if (confirm("¿Usa la Chacra para Reserva?")) {

                                                            document.getElementById('contenedor').style.display = "block";

                                                            document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/DestinoReserva/altaReserva.php?idC=" + idCult + "'></iframe>";

                                                        }

                                                    } else {

                                                        if (inde == "11") {

                                                            if (confirm("¿Ingresa indormación de Análisis de Pastura?")) {

                                                                document.getElementById('contenedor').style.display = "block";

                                                                document.getElementById('contenedor').innerHTML = "<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#EBEBEB; padding: 1em 0em;'src='../Cultivo/Tareas/AnalisisPastura/altaAnalisisPastura.php?idC=" + idCult + "'></iframe>";

                                                            }

                                                        }

                                                    }



                                                }



                                            }



                                        }



                                    }



                                }



                            }



                        }



                    }

                }

            }

        </script>

    </head>



    <body>

        <div  align="center" style=" padding:5px;border:2px solid  #000; width:99%; alignment-adjust:central; background:#F8F8F8; font-size:19px;">

            <h1 class="link">GESTIÓN DE CULTIVO</h1>

            </br>



            <table style="font-size:13px;"cellspacing=0 cellpadding=2 bordercolor="black" border='1' id="customers">

                <tr style="background-color:#C2C285">

                    <th>	Codigo Clave	</th>

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



                </tr>	

                <tr>

                    <td> <div align="center"><?php echo $cc ?></div></td>

                    <td> <div align="center"><?php echo $nomC ?> </div></td>

                    <td> <div align="center"><?php echo $nom ?> </div></td>

                    <td> <div align="center"><?php echo $ts1 ?> </div></td>  

                    <td> <div align="center"><?php echo $ts2 ?> </div></td>  

                    <td> <div align="center"><?php echo $ts3 ?> </div></td>  

                    <td> <div align="center"><?php echo $as ?></div></td>  

                    <td> <div align="center"><?php echo $tpc ?> </div></td>  

                    <td> <div align="center"><?php echo $cat ?> </div></td>  

                    <td> <div align="center"><?php echo $fechainicio ?> </div></td>  

                    <td> <div align="center"><?php echo $fechafin ?> </div></td>  

            </table>

            <a  style="width:420px; font-size:13px; color:#FFF; border:3px solid  #768d87; background-color:#768d87" href="#" onClick="javascript:modificarCultivo()">MODIFICAR DATOS DEL CULTIVO</a> 
            <br>
            </br>

            <div  style=" width: 99%;border:1px solid  #000; padding:5px"> 

                <h1 style="font-size:16px;border:3px solid  #000; width:30%; padding:5px">Tareas Realizadas</h1>

                </br>          

                <?php echo $divtareas ?> 

                </br> 

                </br>

            </div>

            </br>

            <a class="btn" style="width:170px; font-size:13px;border:3px solid  #000;"href="#" onClick="javascript:verTarea()">MOSTRAR TAREA</a>    

            <?php
            if ($fechafin == "") {
                ?>   



                <a class="btn" style="width:170px; font-size:13px;border:3px solid  #000;"href="#" onClick="javascript:eliminarTarea()">ELIMINAR TAREA</a></br>



                <h1 style=" margin-top:auto; text-align:center; font-size:19px; width:100%;"> 
                    <br>
                    INGRESAR NUEVA TAREA
                    <br>
                    <select id="sel" style="  border:1px solid  #000; width:300px; background:#F8F8F8; font-size:19px;"> 

                        <option value="0"></option>	

                        <option value="1">	Informaci&oacute;n de Siembra	</option>

                        <option value="2">	Informaci&oacute;n de lo Sembrado	</option>

                        <option value="3">	Informaci&oacute;n de Riego	</option>

                        <option value="4">	Revisi&oacute;n Malezas, Insectos, Enfermedades</option>	

                        <option value="5">	Aplicaci&oacute;n	</option>

                        <option value="6">	Laboreo	</option>

                        <option value="7">	Chacra con destino a Grano, Semilla </option>

                        <option value="8">	An&aacute;lisis de Suelos</option>

                        <option value="11">	An&aacute;lisis de Pastura</option>

                        <option value="9">	Nuevo Pastoreo	</option>

                        <option value="10">	Chacra con destino a Reservas	</option>

                    </select> 

                    <br>



                    <a  id="blo2" class="btn"  style="width:200px; border:3px solid  #666; font-size:15px" href="#"onClick="javascript:nuevaT()">AGREGAR TAREA</a></br></br>



                    <a id="blo"  class="btn" style="width:200px; font-size:15px;border:3px solid  #000;" onClick="javascript:cerrarC()" >CERRAR CULTIVO</a></br> </br>

                </h1>

                <?php
            }
            ?>



        </div>

        <div  align="center" onClick="ocultar()" id="contenedor"  style="display:none; background: #F00; min-height:600pz; left:30%; width:210px;"></div>

    </body>

</html>