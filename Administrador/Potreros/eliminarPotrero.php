<?php
require_once("../Clases/Persistencia/Persistencia_Potreromysqli.php");
$idPot = $_GET['idP'];
$perPotrero = new Persistencia_Potreromysqli();
$perPotrero->desactPotrero($idPot);
?>
<html>
    <head>

    </head>
    <body>

        <script>

            alert("Potrero eliminado!");
            window.location.href = "listaPotrerosEditar.php";

        </script>
    </body>
</html>