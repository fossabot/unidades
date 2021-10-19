<?php
$potrero = $_GET['idP'];
$unidad = $_GET['unidad'];
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
$perPot = new Persistencia_Potreromysqli();
$potr = $perPot->potrerosxidP($potrero);
$es = mysqli_fetch_array($potr);
$coordenadas = $es['Coordenadas'];
?>
<html>
    <head>
        <title>Editar Potrero</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link href="../CSS/estiloTar.css"rel="stylesheet" type="text/css">

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
            var map;
            var area;
            var predio;
            var predioMO;
            var idPot = <?php echo $potrero ?>;

            function vistaprevia() {
                var coordenadas = "<?php echo $coordenadas ?>";
                var idPotrero = idPot;
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

                //Se convierte de String a Decimales y se crean los puntos de coordenadas
                for (i = 0; i < Aux.length; i++) {
                    var lat = parseFloat(Aux[i]);
                    var lng = parseFloat(Aux[i + 1]);
                    Coords [j] = new google.maps.LatLng(lat, lng);
                    j++;
                    i++;
                }

                // Se crea un poligono que representara el potrero obtenido
                predioMO = new google.maps.Polygon({
                    paths: Coords,
                    strokeColor: "#F00",
                    strokeOpacity: 3,
                    strokeWeight: 6,
                    fillColor: "#F00",
                    fillOpacity: 0,
                    editable: true,
                    zIndex: 1
                });
                predioMO.setMap(map);

                var potreros = new Array();
                var Corpotreros = new Array();

<?php
$potlind = $perPot->potrerosUniSP($unidad, $potrero);
$i = 0;
while ($ci = mysqli_fetch_array($potlind)) {
    $cord = $ci["Coordenadas"];
    echo 'Corpotreros[' . $i . '] = "' . $cord . '";';
    $i++;
}
?>

                var Coords = new Array();
                var Aux = new Array();
                var Predios = new Array();
                var l = 0;
                for (l; l < Corpotreros.length; l++) {
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
                        strokeColor: '#F8F8F8',
                        strokeOpacity: 1,
                        strokeWeight: 5,
                        fillColor: "#F8F8F8",
                        fillOpacity: 0
                    });
                    predio.setMap(map);
                }

            }

            function crearpath() {
                var polygonBounds = predioMO.getPath();
                coordenadas = "";
                var xy;
                // Iterate over the polygonBounds vertices.
                for (var i = 0; i < polygonBounds.length; i++) {
                    xy = polygonBounds.getAt(i);
                    coordenadas = coordenadas + " " + xy.lat() + " " + xy.lng();
                }
                area = google.maps.geometry.spherical.computeArea(polygonBounds);
                relocate('modificarPotrero.php', {'Coordenadas': coordenadas, 'Superficie': area, 'Id': idPot});
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
            <a id="titulo"> Editar Potrero</a>
            <a  id="botonG"   href="#" onClick="crearpath()" class="myButton" disabled='true' >GUARDAR</a>
        </div>
        <div id = 'mapa' style="top:0px"  >   </div>
    </body>
</html>