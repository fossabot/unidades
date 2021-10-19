<?php

	session_start(); 

	require_once("../Clases/Dominio/Dominio_Usuario.php");

	require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");

	$usuario = new Dominio_Usuario();

	$idUsuario = $_GET['txtIdUsuario'];

	$usuario->setIdUsuario($idUsuario);

	$usuario->setCedula	($_GET['txtCedula']);

	$usuario->setUsuario	($_GET['txtUsuario']);

	$usuario->setContrasena	($_GET['txtContrasena']);

	$usuario->setNombre	($_GET['txtNombre']);

	$usuario->setApellido	($_GET['txtApellido']);

	$usuario->setLocalidad	($_GET['txtLocalidad']);

	$usuario->setTipoUsuario	($_GET['selTipoUsuario']);

	$usuario->setActivo	($_GET['selActivo']);

	$usuario->setDepartamento	($_GET['txtDepartamento']);

	$unidad = $_SESSION['unidad'];



	$perUsuario = new Persistencia_Usuariomysqlii();

	$existe = $perUsuario->existe($idUsuario);

	

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<?php

	if($existe == false)

	{

		$perUsuario->guardar($usuario, $unidad);

?>

	   <script>    

		alert("Usuario Guardado!");

		window.location.href="listaUsuarios.php";

    	</script>

	

<?php }else{ 

		$perUsuario->modificar($usuario, $unidad);

		?>

	   <script>    

		alert("Usuario Modificado!");

		window.location.href="listaUsuarios.php";

    	</script>

<?php } ?>

</body>

</html>