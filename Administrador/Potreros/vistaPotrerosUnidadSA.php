<?php
session_start();
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
require_once("../Clases/Persistencia/Persistencia_Unidadmysqli.php");
$perPot = new Persistencia_Potreromysqli();
$punidad = new Persistencia_Unidadmysqli();
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
            .windowBox{ position: absolute; left: 50%; top: 18%; width: 500px; height: 350px; margin: -100px 0 0 -270px;-webkit-box-shadow: 0px 0px 300px 200px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 300px 200px rgba(0,0,0,0.75);box-shadow: 0px 0px 300px 200px rgba(0,0,0,0.75); z-index:1; }
            #link { top:2%;  left:66%;position: absolute;color: #000 ; z-index:19999; font-family: 'Marcellus', serif; font-size: 1.1em; font-weight:50%; margin: 0px 0px; box-shadow: 1px 1px 1px 1px  #E9E9E9; text-align:center; height:auto;word-wrap: break-word;vertical-align:middle;}    

        </style>
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

            function iniciarMapa() {

                centro = new google.maps.LatLng(-34.357410, -57.697062)

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

<?php
$i = 0;
while ($ci = mysqli_fetch_array($potreros)) {
    $id = $ci["idPotrero"];
    $cord = $ci["Coordenadas"];
    $nom = $ci["Nombre"];
    $est = $ci["Estado"];
    echo 'potreros[' . $i . '] = "' . $id . '";';
    echo 'Corpotreros[' . $i . '] = "' . $cord . '";';
    echo 'Nombres[' . $i . '] = "' . $nom . '";';
    echo 'Estado[' . $i . '] = "' . $est . '";';
    $i++;
}
?>

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

                    //Se crea El Potrero
                    predio = new google.maps.Polygon({
                        paths: Coords,
                        strokeColor: '#ededed',
                        strokeOpacity: 0.9,
                        strokeWeight: 5,
                        fillColor: "#F8F8F8",
                        fillOpacity: 0

                    });

                    predio.setMap(map);
                    intermedio = google.maps.geometry.spherical.interpolate(Coords [0], Coords [2], 0.5);

                    var image = {
                        url: '../Recursos/Imagenes/marcador.png',
                    };

                    var nom = Nombres[l];
                    var infowindow = new google.maps.InfoWindow({
                        content: nom
                    });


                    var estado = Estado[l];
                    var idPotr = potreros[l];
                    var titulo = idPotr + " " + estado;
                    var marker = new google.maps.Marker({
                        position: Coords [0],
                        map: map,
                        icon: image,
                        title: titulo
                    });

                    infowindow.open(map, marker);

                    /*google.maps.event.addListener(marker, 'click', function (event) {
                     ClickPot(this.getTitle());
                     });*/
                    google.maps.event.addListener(predio, "mouseover", function () {
                        this.setOptions({fillOpacity: 4});
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
                if (estadoP == "SinCultivo") {
                    if (confirm("El Potrero Seleccionado se encuentra sin Cultivo Iniciado. ¿Desea Iniciar un Nuevo Cultivo en él?")) {
                        document.getElementById('contenedor').style.display = "block";
                        document.getElementById('contenedor').innerHTML = "<a id='link' onClick='ocultar()' href='#'>X</a><iframe class='windowBox' style='display:block; background-color:#CCC;padding: 2em 0em;'  src='../Cultivo/altaCultivo.php?unidad=" + u + "&pot=" + idP + "'></iframe> ";


                    }
                } else {
                    window.location.href = "elegirAcc.php?idP=" + idP + "";
                }

            }

        //Se muestra la imagen de suelos en el mapa.
            function mostrarSuelos() {
                document.getElementById('verMS').innerHTML = "<a id='verMS' style='top:6px; left:80%; color:#000; background-color:#FFF; z-index:16; position:absolute' onClick='window.location.reload();' href='#' >Ocultar_Mapa_de_Suelos</a>";
                var imag = new google.maps.LatLngBounds(
                        new google.maps.LatLng(-34.364845, -57.736970),
                        new google.maps.LatLng(-34.323964, -57.653169));

                historicalOverlay = new google.maps.GroundOverlay(
                        '../Recursos/Imagenes/suelo.png',
                        imag);
                historicalOverlay.setMap(mapa);
            }

            function ocultar() {
                window.location.reload();
                document.getElementById('contenedor').style.display = 'none';
            }

        </script>

    </head>
    <body  onLoad="iniciarMapa()"  >
        <a id="verMS" style="top:6px; left:80%; color:#000; background-color:#FFF; z-index:16; position:absolute" onClick='mostrarSuelos()' href='#' >Ver_Mapa_de_Suelos</a>
        <div  id = 'contenedor'style="display:none;" ></div>
        <div id = 'map-canvas'></div>

    </body>
</html>