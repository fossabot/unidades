<?php
require_once("../Clases/Persistencia/Persistencia_Tareamysqli.php");
$idTarea = $_GET['idT'];
$pTarea = new Persistencia_Tareamysqli();
$tar = $pTarea->buscarTXId($idTarea);
$ci = mysqli_fetch_array($tar);
$daT = $ci['data'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Vista Tarea</title>


    </head>

    <body>
        <div id="informa"> <?php echo $daT ?> </div>
    </body>
</html>