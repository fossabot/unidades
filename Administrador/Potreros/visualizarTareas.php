<?php
require_once("../Clases/Persistencia/Persistencia_Tareamysqli.php");
$perT = new Persistencia_Tareamysqli();
$uni = $_POST['cultivo'];
$tareas = $perT->buscarT($uni);
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tareas del Cultivo</title>

        <link rel="stylesheet" type="text/css" href="../CSS/styles.css" />

        <script languaje="javascript">
            function funcion_javascript(titulo, datos, fecha) {
                var title = titulo;
                var date = fecha;

                $('<div id="overlay">').css({
                    width: $(document).width(),
                    height: $(document).height(),
                    opacity: 0.6

                }).appendTo('body').click(function () {

                    $(this).remove();
                    $('#windowBox').remove();

                });

                $('body').append('<div id="windowBox"><div id="titleDiv">' + title + '</div><div id="date">' + date + '</div></div>');

                $('#windowBox').css({
                    width: 500,
                    height: 350,
                    left: ($(window).width() - 500) / 2,
                    top: ($(window).height() - 350) / 2
                });
            }
        </script> 


    </head>

    <body>
        <div id="main">
            <div id="timelineLimiter"> 
                <div id="timelineScroll">
                    <?php
                    $fecha = array();
                    $info = array();
                    $nom = array();
                    $i = 0;
                    while ($ci = mysqli_fetch_array($res)) {
                        $fecha[$i] = $ci['Fecha'];
                        $info[$i] = $ci['Data'];
                        $nom[$i] = $ci['NombreCat'];
                        $i++;
                    }

                    $colors = array('green', 'blue', 'chreme');
                    $scrollPoints = '';

                    $i = 0;
                    while ($fecha[$i] != null) {
                        echo '<div class="event">
                <div class="eventHeading ' . $colors[$i++ % 3] . '">' . $fecha[$i] . '</div>
                <ul class="eventList">
                ';
                        // Loop through the events in the current year:
                        $dat = $info[$i];
                        echo '<li class="' . $event['type'] . '">				
				<div class="content">
				<a href="javascript:void(0)" onMouseDown="'
                        ?>
                        <script languaje="javascript">
                            funcion_javascript();
                        </script>
                        <?php
                        ')">' . $nom[$i] . '</a>

                        </div>

                        </li>';


                        echo '</ul></div>';

                        // Generate a list of years for the time line scroll bar:
                        $scrollPoints.='<div class="scrollPoints">' . $fecha[$i] . '</div>';

                        $i++;
                    }
                    ?>

                    <div class="clear"></div>
                </div>

                <div id="scroll"> 
                    <div id="centered">
                        <div id="highlight"></div>
                        <?php echo $scrollPoints ?>
                        <div class="clear"></div>
                    </div>
                </div>

                <div id="slider">
                    <div id="bar">
                        <div id="barLeft"></div>
                        <div id="barRight"></div>  
                    </div>
                </div>

            </div> 

            <p class="tutInfo">

        </div>

    </body>
</html>
