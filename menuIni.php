<?php
//Inicializar una sesion de PHP
session_start();
//echo $_SESSION['unidad'];
//Validar que el usuario este logueado y exista un UID
if (!($_SESSION['autenticado'] == 'SI' && isset($_SESSION['uid']))) {
    //Si no existe usuario logueado, redireccionamos al formulario de logueo.
    ?>
    <script type="text/javascript">
        alert("Sesion no iniciada! .\n Inicie Sesión.");
        window.location.href = "index.php";
    </script>
    <?php
} else {
    $NombreUsuario = $_SESSION['nombreU'];
    $idUsuario = $_SESSION['uid'];
    $NombreUnidad = $_SESSION['NombreUnidad'];
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Menu Inicio</title>
        <link href="Administrador/CSS/estiloMenu.css"rel="stylesheet" type="text/css">
        <script>
            var idUsuario = <?php echo $idUsuario ?>;
            //Dibujamos el menú principal del sistema según privilegios del usuario.
            function dibujarMenu() {
                var tu = '<?php echo $_SESSION['tipousuario'] ?>';
                if (tu == "Encargado") {
                    document.getElementById("C").style.display = 'inline';
                    document.getElementById("P").style.display = 'inline';
                    document.getElementById("Usuario").style.display = 'inline';
                    document.getElementById("res").style.display = 'inline';
                }
                if (tu == "Registro") {
                    document.getElementById("C").style.display = 'inline';
                    document.getElementById("P").style.display = 'inline';
                }

                direccion(1);
            }

            //Direccionamos la pagina según donde se pueda acceder.
            function direccion(pag) {
                if (pag == 1) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/vistaPotrerosUnidad.php'></iframe>";
                }
                if (pag == 2) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/crearPotrero.html'></iframe>";
                }
                if (pag == 3) {
                    window.location.href = "Administrador/Potreros/crearPotreroConBoton.html";
                }
                if (pag == 4) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/vistaPotrerosUnidadSinCultivo.php'></iframe>";
                }
                if (pag == 5) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/vistaPotrerosUnidadConCultivo.php'></iframe>";
                }
                if (pag == 6) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/listaPotreros.php'></iframe>";
                }
                if (pag == 7) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/ingresoFechas.php'></iframe>";
                }
                if (pag == 8) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Cultivo/altaCultivoSinPotrero.php'></iframe>";
                }
                if (pag == 9) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Cultivo/listaCultivos.php'></iframe>";
                }
                if (pag == 10) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/listaPotrerosEditar.php'></iframe>";
                }
                if (pag == 11) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/listaUsuarios.php'></iframe>";
                }
                if (pag == 12) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Busqueda/BusquedaPastoreo.php'></iframe>";
                }
                if (pag == 13) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Busqueda/BusquedaRiego.php'></iframe>";
                }
                if (pag == 14) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/listaUsuarios.php'></iframe>";
                }
                if (pag == 15) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/listaUsuarios.php'></iframe>";
                }
                if (pag == 16) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/listaUsuarios.php'></iframe>";
                }
                if (pag == 17) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/cambiarContrase.php?idU=" + idUsuario + "'></iframe>";
                }
                if (pag == 18) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/crearPotreroManual.php'></iframe>";
                }
                if (pag == 25) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/RespaldoBDD/bkpBDD.php'></iframe>";
                }
                if (pag == 19) {
                    alert("Seleccione un Potrero desde el MAPA");
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/vistaPotrerosParaCultivo.php'></iframe>";
                }
                if (pag == 20) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/altaUsuario.php'></iframe>";
                }
                if (pag == 21) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Usuarios/asignarUsuario.php'></iframe>";
                }
                if (pag == 22) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Experimento/listaPotrerosConExperimentos.php'></iframe>";
                }
                if (pag == 23) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Experimento/listaExperimentos.php'></iframe>";
                }
                if (pag == 24) {
                    alert("Seleccione un Potrero desde el MAPA");
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Potreros/vistaPotrerosParaExperimento.php'></iframe>";
                }
                if (pag == 26) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Reporte/ReporteCultivo.php'></iframe>";
                }
                if (pag == 27) {
                    document.getElementById("contendor").innerHTML = "<iframe class='marco' src='Administrador/Respaldos/respaldo.php'></iframe>";
                }
            }
        </script>

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

    </head>

    <body  onload="dibujarMenu()" >



        <img class="imagen" src="Administrador/Recursos/Imagenes/inia.jpg"></img>

        <div align="center" >



            <a style="font-size:30px; color:#036;">GESTIÓN DE UNIDAD</a>







            <ul id="menu" >

                <li><a href="" onClick="direccion(1)" class="boton">INICIO   |</a></li>    

                <div id="P" style="display:none">

                    <li><a href="#" class="boton">POTREROS   |</a>

                        <ul> 

                            <li id="NP"><a href="#" onClick="direccion(2)">- Nuevo Potrero</a></li>

                            <li id="NPB"><a href="#" onClick="direccion(3)">- Nuevo Potrero Con Boton</a></li>                 

                            <li id="NPB"><a href="#" onClick="direccion(18)">- Trazar Potrero</a></li>

                            <li><a href="#" onClick="direccion(4)">- Potreros Sin Cultivo</a></li>

                            <li><a href="#" onClick="direccion(5)">- Potreros Con Cultivo</a></li>

                            <li><a href="#" onClick="direccion(6)">- Lista de Potreros</a></li>       

                            <li><a href="#" onClick="direccion(10)">- Gestionar Potreros</a></li>

                        </ul></li></div>

                <div id="C" style="display:none">

                    <li ><a href="#" class="boton">CULTIVOS   |</a>

                        <ul> 

                            <li><a href="#" onClick="direccion(8)">- Nuevo Cultivo</a></li>                

                            <li><a href="#" onClick="direccion(19)">- Nuevo Cultivo desde Mapa</a></li>

                            <li><a href="#" onClick="direccion(9)">- Gestionar Cultivos</a></li>

                        </ul></li>

                    <li id="GUs"><a href="#" class="boton">EXPERIMENTOS  |</a>

                        <ul>	                

                            <li><a href="#" onClick="direccion(24)">- Nuevo Experimento</a></li>  

                            <li><a href="#" onClick="direccion(22)">- Potreros Con Experimentos</a></li>      

                            <li><a href="#" onClick="direccion(23)">- Gestionar de Experimentos</a></li>       

                        </ul></li>	</div>

                <li ><a href="#" class="boton">BUSQUEDAS   |</a>

                    <ul> 

                        <li><a href="#" onClick="direccion(7)">- Historial de Potreros</a></li> 

                        <li><a href="#" onClick="direccion(12)">- Información de pastoreo</a></li>

                        <li><a href="#" onClick="direccion(13)">- Información de riego</a></li>                                       

                        <li><a href="#" onClick="direccion(26)">- Detalle de Chacra</a></li>

                    </ul></li>    

                <div id="Usuario" style="display:none">

                    <li id="GUs" ><a href="#" class="boton">USUARIOS   |</a>

                        <ul>	

                            <li><a href="#" onClick="direccion(20)">- Nuevo Usuario</a></li>

                            <li><a href="#" onClick="direccion(21)">- Asignar Usuarios Existentes</a></li>                   

                            <li><a href="#" onClick="direccion(11)">- Gestionar Usuarios</a></li>            

                        </ul></li>	</div>

                <div id="res" style="display:none">

                    <li><a href="#" class="boton">BASE DE DATOS   |</a>

                        <ul>	

                            <li><a href="#" onClick="direccion(27)">- Respaldar</a></li>      

                        </ul></li>	</div>

                <li id="GUn" style="display:none"><a href="#" onClick="direccion(16)">GESTIÓN DE UNIDADES</a></li>

                <li ><a href="#" style="color: #003" class="boton"> > <?php echo $NombreUsuario ?> < </a>

                    <ul> 

                        <li><a href="Administrador/Recursos/Manuales/Manual<?php echo $_SESSION['tipousuario'] ?>.pdf">- AYUDA</a></li>

                        <li><a href="#" onClick="direccion(17)">- CAMBIAR CONTRASEÑA</a></li>

                        <li><a href="Administrador/Usuarios/logout.php">- SALIR</a></li>

                    </ul></li>



            </ul>    

        </div> 

        <div id="contendor"  class="marco" style="background-color:#aaa"> </div>

    </body>

</html>