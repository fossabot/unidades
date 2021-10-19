<?PHP
session_start();
$idPotrero = $_GET['idP'];
$tp = $_GET['tp'];
$año = $_GET['Asiem'];
$uni = $_SESSION['unidad'];
$nombreUni = $_SESSION['NombreUnidad'];
require_once("../Clases/Persistencia/Persistencia_Cultivomysqli.php");
$pCultivo = new Persistencia_Cultivomysqli();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href="../CSS/estiloTar.css" rel="stylesheet" type="text/css"/>
        <script>
            function printDiv()
            {
                var divToPrint = document.getElementById('table');
                newWin = window.open("");
                newWin.document.write(divToPrint.outerHTML);
                newWin.print();
                newWin.close();
            }
        </script>
    </head>

    <body>
        <div id="table">
            <h1 align="center"><strong>Pastoreos Realizados</strong></h1></br>
            <table align="center"  border="1" class="table" >
                <tr>
                    <th>	Codigo Clave</th>
                    <th> 	Año Vida	</th>
                    <th>	Número de Pastoreo	</th>
                    <th>	Fecba Inicio	</th>                    
                    <th>	Fecha Fin	</th>                    
                    <th>	Categoria</th>
                    <th>	Numero de Animales</th>
                    <th>	Método </th>
                </tr>	
                <?php
                $pas = $pCultivo->pastoreos($año, $tp, $idPotrero);
                if (!is_null($pas)) {
                    while ($es = mysqli_fetch_array($pas)) {
                        ?>
                        <tr>
                            <td> <div align="center"><?php echo $es["CodigoClave"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["AnoVida"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["NroPastoreo"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["FechaInicio"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["FechaFin"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["Categoria"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["NroAnimales"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["Metodo"] ?> </div></td>

                        <?php
                        }
                    }
                    ?>   


            </table></br>
        </div>
        <tr>
            <td colspan="4">
                <div align="center">

                    <input  type="button" value="Imprimir Resultado" onclick="javascript:printDiv();"  class="btn"/>
                </div>

            </td>


        </tr> 
    </body>
</html>