<?php
session_start();
	require_once("../Clases/Dominio/Dominio_Usuario.php");

	require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");

	$usuario = new Dominio_Usuario();

	$idUsuario = $_GET['idUsuario'];

	$uni = $_SESSION['unidad'];

	

	$perUsuario = new Persistencia_Usuariomysqlii();

	$perUsuario->desafectarU($idUsuario, $uni);

	

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	

</head>

<body>

	<script>

	alert("Usuario Desafectado!");

		window.location.href="listaUsuarios.php";

    	</script>



</body>

</html>