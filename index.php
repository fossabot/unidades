<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Inicio</title>
        <link href="Administrador/CSS/estiloLog.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            $().ready(function () {
                $("#frmlogin").validate();
                $("#usuario").focus();
            });
            // -->
        </script>
        <?php
        require_once("Administrador/Clases/Persistencia/Persistencia_UnidadMySqli.php");
        $punidad = new Persistencia_Unidadmysqli();
        $unidades = $punidad->unidades();
        $combobit = '';
        $i = 0;

        while ($u = mysqli_fetch_array($unidades)) {

            $i+=1;

            $id = $u["idUnidad"];

            $Nombre = $u["Nombre"];

            $combobit .=" <option value='" . $id . "'>" . $Nombre . "</option>";
        }
        ?>

        <script language="JavaScript1.2">

<!--

            window.moveTo(0, 0);

            if (document.all) {

                top.window.resizeTo(screen.availWidth, screen.availHeight);

            } else if (document.layers || document.getElementById) {

                if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {

                    top.window.outerHeight = screen.availHeight;

                    top.window.outerWidth = screen.availWidth;

                }

            }

            //-->

        </script>     



    </head>

    <body>

        <br /><br />

        <form id="frmlogin" name="frmlogin"  method="POST" action="validarusuario.php" class="login">



            <table>

                <tr> 

                    <td> <label>Unidad</label></td>

                    <td > <SELECT NAME="selCombo" SIZE=1 onChange="" style="width:100%"> 

                            <?php echo $combobit; ?>

                        </SELECT></td></tr>

                <tr height="10px;"></tr>

                <tr>

                    <td> <label>USUARIO</label></td>

                    <td><input id="usuario" name="usuario" type="text"  required="required"></td></tr>

                <tr height="10px;"></tr>

                <tr>

                    <td> <label>CONTRASEÑA</label></td>

                    <td><input  id="password" name="password" type="password" required></td></tr>

                <tr height="10px;"></tr>

                <tr>

                    <td colspan="2" align="center"><input type="submit" name="enviar" value="INGRESAR"></td></tr>



            </table>

        </form>

    </body>

</html>