<?php
session_start();
require_once("Administrador/Clases/Persistencia/Persistencia_UsuarioMySqli.php");
require_once("Administrador/Clases/Persistencia/Persistencia_UnidadMySqli.php");
$usr = $_POST['usuario'];
$pw = $_POST['password'];
$unidad = $_POST['selCombo'];
//Obtengo la version encriptada del password
$pw_enc = md5($pw);
$pusuario = new Persistencia_Usuariomysqli();
$result = $pusuario->validarusuario($usr, $pw, $unidad);
$uid = "";
//Si existe al menos una fila
if ($fila = mysqli_fetch_array($result)) {
    //Obtener el Id del usuario en la BD       
    $uid = $fila['idUsuario'];

    //Crear una variable para indicar que se ha autenticado
    $_SESSION['autenticado'] = 'SI';
    //Guardamos los datos necesarios de la sesión
    $_SESSION['uid'] = $uid;
    $_SESSION['unidad'] = $unidad;

    $_SESSION['tipousuario'] = $fila['Tipo'];

    $NOM = $fila['Nombre'] . " " . $fila['Apellido'];

    $_SESSION['nombreU'] = strtoupper($NOM);

    $_SESSION['usuario'] = $usr;
    $punidad = new Persistencia_Unidadmysqli();
    $unidades = $punidad->unidadxid($_SESSION['unidad']);
    $u = mysqli_fetch_array($unidades);
    $NombreUnidad = $u['Nombre'];
    $_SESSION['NombreUnidad'] = $NombreUnidad;
    ?>		

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript">


        //alert("Acceso a Unidad de <?PHP //echo $NombreUnidad   ?>!");
        window.location.href = "menuIni.php";

    </script>

    <?php
} else {
    ?>        

    <script type="text/javascript">

        alert("Acceso denegado! .\n Verifique Datos.");

        window.location.href = "index.php";

    </script>

    <?php
}
?>                     

