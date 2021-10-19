<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_PotreroMySqli.php");
require_once("../Clases/Persistencia/Persistencia_UnidadMySqli.php");
require_once("../Clases/Persistencia/Persistencia_CultivoMySqli.php");
$perPot = new Persistencia_Potreromysqli;
$punidad = new Persistencia_Unidadmysqli;
$pcultivo = new Persistencia_Cultivomysqli;
$uni = $_SESSION['unidad'];
$potreros = $perPot->potreros($uni);
?>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>Potrero</title>

        <style>
            body {  padding-left:  0px;   padding-right: 0px;  margin-left:  0px;  margin-right: 0px;  margin-top:1px;  border: 1x solid black;}
            #map-canvas { position: absolute; background: transparent; height:100%; width: 100%; left:0; right: 0; bottom: 0;top:0px;}
            .windowBox{ position: absolute; left: 38%; top: 18%; width: 700px; height:560px; margin: -100px 0 0 -270px; background-color:#F9F9F9; z-index:1; }
            #link { top:2%;  left:66%;position: absolute;color: #000 ; z-index:19999; font-family: 'Marcellus', serif; font-size: 1.1em; font-weight:50%; margin: 0px 0px; box-shadow: 1px 1px 1px 1px  #E9E9E9; text-align:center; height:auto;word-wrap: break-word;vertical-align:middle;}    

        </style>
        <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=geometry&sensor=false"></script>
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
        <script>
            var mapa;
            var marcaUbi;
            var Unidad;
            var Potrero;
            var NombreP;
            var etiquetas = new Array();

            function iniciarMapa() {

                centro = new google.maps.LatLng(-34.356447, -57.709544)

                //Se creea el mapa haciendo centrando vista
                var mapOptions = {
                    zoom: 14,
                    center: centro,
                    mapTypeId: google.maps.MapTypeId.HYBRID,
                    mapTypeControl: true,
                    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                    navigationControl: true,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL}
                };

                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                mapa = map;

                var icono = {
                    url: '../Recursos/Imagenes/marcadorper.png',
                };

                marcaUbi = new google.maps.Marker({
                    position: centro,
                    map: mapa,
                    icon: icono
                });

                var potreros = new Array();
                var Corpotreros = new Array();
                var Nombres = new Array();
                var Estado = new Array();
                var IDCult = new Array();

<?php
$i = 0;
while ($ci = mysql_fetch_array($potreros)) {
    $id = $ci["idPotrero"];
    $cord = $ci["Coordenadas"];
    $nom = $ci["Nombre"];
    $est = $ci["Estado"];
    if ($est == "ConCultivo") {
        $cult = $pcultivo->cultivoxiddePot($id);
        $c = mysql_fetch_array($cult);
        echo 'IDCult[' . $i . '] = "' . $c["idCultivo"] . '";';
    }
    echo 'potreros[' . $i . '] = "' . $id . '";';
    echo 'Corpotreros[' . $i . '] = "' . $cord . '";';
    echo 'Nombres[' . $i . '] = "' . $nom . '";';
    echo 'Estado[' . $i . '] = "' . $est . '";';
    $i++;
}
?>
                var nom;
                var estado;
                var idPotr;
                var titulo;
                var predio;
                var Coords = new Array();
                var Aux = new Array();
                var Predios = new Array();
                var l = 0;
                for (l; l < potreros.length; l++) {
                    var predio;
                    var Coords = new Array();
                    var Aux = new Array();
                    var Predios = new Array();
                    var j = 0;
                    var coordenadas = Corpotreros[l];

                    //Se divide el String de Coordenadas
                    var ss = coordenadas.split(" ");
                    var h = 0;
                    for (i = 1; i < ss.length; i++) {
                        Aux[h] = ss[i];
                        h++;
                    }

                    //Se crean LatLng(Puntos de Coordenadas)
                    for (i = 0; i < Aux.length; i++) {
                        var lat = parseFloat(Aux[i]);
                        var lng = parseFloat(Aux[i + 1]);
                        Coords [j] = new google.maps.LatLng(lat, lng);
                        j++;
                        i++;
                    }

                    nom = Nombres[l];
                    estado = Estado[l];
                    idPotr = potreros[l];
                    titulo = idPotr + " " + estado + " " + nom;
                    var color = "#69F";
                    if (estado == "ConCultivo") {
                        color = "#0F9";
                    }
                    //Se crea El Potrero
                    predio = new google.maps.Polygon({
                        paths: Coords,
                        strokeColor: color,
                        strokeOpacity: 1,
                        strokeWeight: 5,
                        fillColor: color,
                        fillOpacity: 0,
                    });

                    predio.setMap(map);

                    intermedio = google.maps.geometry.spherical.interpolate(Coords [0], Coords [2], 0.5);

                    var infowindow = new google.maps.InfoWindow({content: nom, maxWidth: 60});

                    infowindow.setPosition(intermedio);

                    infowindow.setMap(map);
                    infowindow.close();
                    etiquetas[l] = infowindow;

                    var estado = Estado[l];
                    var idPotr = potreros[l];
                    var idC = IDCult[l];
                    var titulo = idPotr + " " + estado + " " + nom + " " + idC;

                    (function (predio, titulo) {
                        google.maps.event.addListener(predio, 'click', function () {
                            ClickPot(titulo);
                        });
                    })(predio, titulo);


                    google.maps.event.addListener(predio, "mouseover", function () {
                        this.setOptions({fillOpacity: 1});
                    });
                    google.maps.event.addListener(predio, "mouseout", function () {
                        this.setOptions({fillOpacity: 0});
                    });

                }

                registrarPosicion();
            }

            function registrarPosicion() {

                idRegistroPosicion = navigator.geolocation.watchPosition(
                        exitoRegistroPosicion,
                        falloRegistroPosicion,
                        {
                            enableHighAccuracy: true,
                            maximumAge: 3000,
                            timeout: 27000
                        });
            }

            function accion(NRO) {
                if (NRO == 0) {
                    window.location.href = "../Cultivo/altaCultivo.php?unidad=" + Unidad + "&pot=" + Potrero + "&nomP=" + NombreP + "";
                }
                if (NRO == 1) {
                    window.location.href = "../Experimento/altaExperimento.php?unidad=" + Unidad + "&pot=" + Potrero + "&nomP=" + NombreP + "";
                }
                if (NRO == 2) {
                    document.getElementById('Consulta').style.display = 'none';
                }
            }

            function exitoRegistroPosicion(position) {
                var long = position.coords.longitude;
                var lati = position.coords.latitude;
                var ubica = new google.maps.LatLng(lati, long);

                marcaUbi.setPosition(ubica);

            }

            function falloRegistroPosicion() {
                // alert('No se pudo determinar la ubicación');
            }

        //Se abre archivo de alta Cultivo en el DIV seleccionado
            function ClickPot(datos) {
                var ss = datos.split(" ");
                var u = <?php echo $uni ?>;
                var idP = ss[0];
                var estadoP = ss[1];
                var nomP = ss[2];
                var cult = ss[3];
                Potrero = idP;
                Unidad = u;
                NombreP = nomP;
                if (estadoP == "SinCultivo") {
                    document.getElementById('Consulta').style.display = 'block';
                } else {
                    if (estadoP == "ConExperimento") {

                    } else {
                        window.location.href = "elegirAcc.php?idP=" + idP + "&idC=" + cult;
                    }
                }
            }

        //Se muestra la imagen de suelos en el mapa.
            function mostrarSuelos() {
                document.getElementById('verMS').innerHTML = "<a id='verMS' style='top:6px; left:60%; color:#000; background-color:#FFF; z-index:16; position:absolute' onClick='window.location.reload();' href='#' >OCULTAR SUELOS</a>";
                var imag = new google.maps.LatLngBounds(
                        new google.maps.LatLng(-34.36445, -57.73530),
                        new google.maps.LatLng(-34.325730, -57.65600));


                document.getElementById('ref').style.display = 'block';

                historicalOverlay = new google.maps.GroundOverlay(
                        '../Recursos/Imagenes/Suelos.png',
                        imag);
                historicalOverlay.setMap(mapa);
            }

            function ocultar() {
                window.location.reload();
                document.getElementById('contenedor').style.display = 'none';
            }

            function mostrarEtiquetas() {
                var l = 0;
                for (l; l < etiquetas.length; l++) {
                    etiquetas[l].open(mapa);
                    etiquetas[l] = etiquetas[l];
                }
                document.getElementById('verEtiquetas').innerHTML = "<a id='verEtiquetas' style='top:6px; left:50%; color:#000; background-color:#FFF; z-index:38; position:absolute' onClick='ocultarEtiquetas()' href='#' >Ocultar Etiquetas</a>";
            }

            function ocultarEtiquetas() {

                window.location.reload();

            }

        </script>

    </head>
    <body  onLoad="iniciarMapa()"  >
        <a id="verMS" style="top:6px; left:60%; color:#000; background-color:#FFF; z-index:16; position:absolute" onClick='mostrarSuelos()' href='#' >SUELOS</a>  
        <a id="verEtiquetas" style="top:6px; left:40%; color:#000; background-color:#FFF; z-index:30; position:absolute" onClick='mostrarEtiquetas()' href='#' >ETIQUETAS</a>
        <div  id = 'contenedor' style="display:none;" ></div>
        <div id = 'map-canvas'></div>

        <div id = 'ref' style="display:none;  top:40%;background-color:#EBEBEB; position:fixed"  align="left"><img src="../Recursos/Imagenes/refSuelos.png"></img></div>

        <div  id="Consulta" style="display:none;position:absolute; left:25%; top:30%; background-color:#D0FDD8; font-size:11px; border:#666 solid 3px" align="center">

            <h1>El Potrero Seleccionado no tiene Cultivo/Experimento.</BR> CARGAR</h1>

            <a id="blo"  class="btn" style="width:200px; font-size:12px;border:3px solid  #000;" onClick="javascript:accion(1)" >EXPERIMENTO</a>

            <a id="blo"  class="btn" style="width:200px; font-size:12px;border:3px solid  #000;" onClick="javascript:accion(0)" >CULTIVO</a></BR></BR>

            <a id="blo"  class="btn" style="width:200px; font-size:12px;border:3px solid  #000;" onClick="javascript:accion(2)" >CANCELAR</a></BR>  

        </div>

    </body>
</html>