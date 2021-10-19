<?php
session_start();
require_once("../Clases/Dominio/Dominio_Potrero.php");
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
$Potrero = new Dominio_Potrero();
$Potrero->setCoordenaras($_POST["Coordenadas"]);
$Potrero->setEstado($_POST["Estado"]);
$Potrero->setSuperficie($_POST["Superficie"]);
$Potrero->setNombre($_POST["Nombre"]);
$perPot = new Persistencia_Potreromysqli();
$unidad = $_SESSION['unidad'];
$perPot->guardar($Potrero, $unidad);
?>

<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href ="../Css/estilo.css" rel="stylesheet" type="text/css" media="screen" title="default">

        <script>



            alert("Potrero Ingresado!");

            window.location.href = "listaPotrerosEditar.php";



        </script>

    </head>

    <body onLoad="red()">



    </body>

</html>

