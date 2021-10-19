<?PHP
$idCultivo = $_GET['idC'];
$CodCultivo = $_GET['nC'];
$f1 = $_GET['f1'];
$f2 = $_GET['f2'];
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
            <h1 align="center"><strong>Riegos Realizados Sobre Cultivo </br> <?php echo $CodCultivo ?> </strong></h1></br>
            <table align="center"  border="1" class="table" >
                <tr>
                    <th>	Codigo Clave	</th>
                    <th>	Fecha	</th>
                    <th>	Método	</th>
                    <th>	Volúmen	</th>
                </tr>	
                <?php
                $suma = 0;
                $riegos = $pCultivo->riegosxCul($idCultivo, $f1, $f2);
                if (!is_null($riegos)) {
                    while ($es = mysqli_fetch_array($riegos)) {
                        $volu = $es["Volumen"];
                        $suma = $suma + $volu;
                        ?>
                        <tr>
                            <td> <div align="center"><?php echo $CodCultivo ?> </div></td>
                            <td> <div align="center"><?php echo $es["Fecha"] ?> </div></td>
                            <td> <div align="center"><?php echo $es["Metodo"] ?></div></td>
                            <td> <div align="center"><?php echo $volu ?> </div></td>

                        <?php } ?>
                        <tr>
                            <td colspan="3"> <div align="center">TOTAL:</div></td>
                            <td> <div align="center"><?php echo $suma ?> </div></td>
                        <?php } ?>   


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