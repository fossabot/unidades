<?php
	require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");
	$pUsuario = new Persistencia_Usuariomysqlii();
	$idU= $_POST['idUsuario'];
	$Con1= $_POST['cont1'];
	$Con2= $_POST['cont2'];
	$correcto = $Con1==$Con2;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
</head>
<body>
<?php
	if($correcto == true)
	{
		$pUsuario->cambioCont($idU, $Con1);
?>
	<div class="textosMsj" align="center"><?php echo "Cambio de Contraseña realizado!</br> Presione 'X' para volver.";?></div>
	
<?php }else{ ?>
	<div class="textosMsj" align="center"><?php echo "Las contraseñas ingresadas no coinciden! ";?></div>
	<div class="textosMsj" align="center"><br><br><a style="background-color:#666666; font:trebuchet MS" href="cambiarContrase.php?idUsuario"+<?php echo $idU ?>+""> REINTENTAR </a></div>
<?php } ?>
</body>
</html>