<?php
require_once("../Clases/Persistencia/Persistencia_Experimentomysqli.php");
$idE = $_GET['idE'];
$perEx = new Persistencia_Experimentomysqli();
$perEx->finalizarExperimento($idE);
?>
<html>
    <head>

    </head>
    <body>

        <script>

            alert("Experimento finalizado!");
            window.location.href = "listaExperimentos.php";

        </script>
    </body>
</html>