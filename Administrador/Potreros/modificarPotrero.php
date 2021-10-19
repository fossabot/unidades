<?php
require_once("../Clases/Dominio/Dominio_Potrero.php");
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
$idP = $_POST['Id'];
$coord = $_POST['Coordenadas'];
$sup = $_POST['Superficie'];
$perPotrero = new Persistencia_Potreromysqli();
$perPotrero->editarPotrero($idP, $coord, $sup);
?>
<html>
    <head>

    </head>
    <body>
        <script>

            alert("Modificado!");
            window.location.href = "listaPotrerosEditar.php";

        </script>

    </body>
</html>