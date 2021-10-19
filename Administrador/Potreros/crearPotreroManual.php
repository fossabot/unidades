<!DOCTYPE html>
<html>
    <head>
        <title>Crear Potrero</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link href="../CSS/estiloTar.css"rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=geometry,drawing&sensor=false">
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
        <script>
            var map;
            var area;
            var predio;
            var drawingManager;

            function vistaprevia() {
                var coordenadas = " -34.336635 -57.687794 -34.337344 -57.684125 -34.337911 -57.684769 -34.338699 -57.687183 -34.336635 -57.687794";
                var aux;
                var n;
                var pex;
                var tcoord = 0;
                var Coords = new Array();
                var Aux = new Array();
                var Predios = new Array();
                var j = 0;

                //Se divide el String de Coordenadas
                var ss = coordenadas.split(" ");
                var h = 0;
                for (i = 1; i < ss.length; i++) {
                    Aux[h] = ss[i];
                    h++;
                }

                //Se creea el mapa centrando vistaen la ubicacion del potrero creado
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(Aux[0], Aux[1]),
                    mapTypeId: google.maps.MapTypeId.HYBRID
                };

                map = new google.maps.Map(document.getElementById('mapa'), mapOptions);


                google.maps.event.addListener(map, 'mousemove', function (event) {
                    document.getElementById("lat").innerHTML = "Latitud: " + event.latLng.lat();
                    document.getElementById("lng").innerHTML = "Longitud: " + event.latLng.lng();
                });

                drawingManager = new google.maps.drawing.DrawingManager({
                    drawingMode: google.maps.drawing.OverlayType.POLYGON,
                    drawingControl: false,
                    polygonOptions: {
                        strokeColor: "#F01",
                        strokeOpacity: 3,
                        strokeWeight: 3,
                        fillColor: "#F00",
                        fillOpacity: 0.5,
                        editable: true,
                        draggable: true,
                        geodesic: true}
                });

                google.maps.event.addListener(drawingManager, 'mousemove', function (event) {
                    document.getElementById("lat").innerHTML = "Latitud: " + event.latLng.lat();
                    document.getElementById("lng").innerHTML = "Longitud: " + event.latLng.lng();
                });

                google.maps.event.addListener(drawingManager, 'overlaycomplete', function (e) {
                    predio = e.overlay;
                    predio.setMap(map);
                    drawingManager.setDrawingMode(null);
                    drawingManager.setdrawingControlOptions(null);
                    google.maps.event.addListener(predio, 'mousemove', function (event) {
                        document.getElementById("lat").innerHTML = "Latitud: " + event.latLng.lat();
                        document.getElementById("lng").innerHTML = "Longitud: " + event.latLng.lng();
                    });
                });

                drawingManager.setMap(map);
            }

            function addPunto(event) {
                predio.setMap(null);
            }

            function limpiar() {
                predio.setMap(null);
                drawingManager = new google.maps.drawing.DrawingManager({
                    drawingMode: google.maps.drawing.OverlayType.rectangle,
                    drawingControl: false,
                    polygonOptions: {
                        strokeColor: "#F01",
                        strokeOpacity: 3,
                        strokeWeight: 3,
                        fillColor: "#F00",
                        fillOpacity: 0.5,
                        editable: true,
                        draggable: true,
                        geodesic: true}
                });

                google.maps.event.addListener(drawingManager, 'mousemove', function (event) {
                    document.getElementById("lat").innerHTML = "Latitud: " + event.latLng.lat();
                    document.getElementById("lng").innerHTML = "Longitud: " + event.latLng.lng();
                });

                google.maps.event.addListener(drawingManager, 'overlaycomplete', function (e) {
                    predio = e.overlay;
                    predio.setMap(map);
                    drawingManager.setDrawingMode(null);
                    drawingManager.setdrawingControlOptions(null);
                    google.maps.event.addListener(predio, 'mousemove', function (event) {
                        document.getElementById("lat").innerHTML = "Latitud: " + event.latLng.lat();
                        document.getElementById("lng").innerHTML = "Longitud: " + event.latLng.lng();
                    });
                });

                drawingManager.setMap(map);
            }

            function crearpath() {
                var polygonBounds = predio.getPath();
                coordenadas = "";
                var xy;
                // Iterate over the polygonBounds vertices.
                for (var i = 0; i < polygonBounds.length; i++) {
                    xy = polygonBounds.getAt(i);

                    coordenadas = coordenadas + " " + xy.lat() + " " + xy.lng();
                }
                area = google.maps.geometry.spherical.computeArea(predio.getPath());
                var nombPot = prompt("Ingrese Nombre del Potrero", "");
                if (nombPot != null) {
                    relocate('agregarPotrero.php', {'Coordenadas': coordenadas, 'Estado': "SinCultivo", 'Superficie': area, 'Nombre': nombPot});
                }
            }
            function relocate(page, params)
            {
                var body = document.body;
                form = document.createElement('form');
                form.method = 'POST';
                form.action = page;
                form.name = 'jsform';
                for (index in params)
                {
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = index;
                    input.id = index;
                    input.value = params[index];
                    form.appendChild(input);
                }
                body.appendChild(form);
                form.submit();
            }
        </script>
        <script>
            $(document).ready(function () {
                var altura = $("div").offset().top;
                $(window).scroll(function () {
                    if ($(window).scrollTop() >= altura) {
                        $("#divRelleno").css("width", "100%");
                        $("#divRelleno").css("position", "fixed");
                    } else {
                        $("#divRelleno").css("width", "100%");
                        $("#divRelleno").css("position", "static");
                    }
                });
            });
        </script>
    </head>
    <body onLoad="vistaprevia()">
        <div  style="background-color:transparent; color:#FFF; z-index:1; position: fixed; left:50%" align="center">
            <a  id="botonG"   href="#" onClick="crearpath()" class="myButton" disabled='true' >GUARDAR</a></br>
            <a id="lat" style="left:80%"> Latitud: </a></br>
            <a id="lng" style="left:80%"> Longitud: </a>  </br>        
            <a id="ac" href="#" onClick="limpiar()" style="left:80%; color:#0FF">Volver a Marcar</a>
        </div>
        <div id = 'mapa' style="top:0px" >   </div>
    </body>
</html>