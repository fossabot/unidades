<?php
require_once("../Clases/Persistencia/Persistencia_Tareamysqli.php");
$idTarea = $_GET['idT'];
$idC = $_GET['idC'];
$idP = $_GET['idP'];
$perTarea = new Persistencia_Tareamysqli();
$perTarea->eliminartarea($idTarea);
?>
<html>
    <head>

    </head>
    <body>

        <script>

            alert("Tarea eliminada!");
            window.location.href = "elegirAcc.php?idP=" +<?php echo $idP ?> + "&idC=" +<?php echo $idC ?>;

        </script>
    </body>
</html>