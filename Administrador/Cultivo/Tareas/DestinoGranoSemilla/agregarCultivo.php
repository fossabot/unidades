<?php

	require_once("../Clases/Dominio/Dominio_Cultivo.php");
	require_once("../Clases/Persistencia/Persistencia_Cultivomysqli.php");
	
	$cultivo = new Dominio_Cultivo();
	$cultivo->setCodigoClave($_GET['txtCodClave']);
	$cultivo->setNombre($_GET['txtNombre']);
	$cultivo->setTipoSuelo1($_GET['selTS1']);
	$cultivo->setTipoSuelo2($_GET['selTS2']);
	$cultivo->setTipoSuelo3($_GET['selTS3']);
	$cultivo->setTipoPasturaCultivo($_GET['selTipoPC']);
	$cultivo->setCategoria($_GET['selCat']);
	$cultivo->setPotrero($_GET['txtPotrero']);	
	$cultivo->setAnosiembra($_GET['txtAnosiembra']);
	$Fecha=getdate();
	$FechaTxt=$Fecha["year"]."/".$Fecha["mon"]."/".$Fecha["mday"];
	$HoraTxt=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha ["seconds"];
	$cultivo->setFechaInicio($FechaTxt);
	$perCultivo = new Persistencia_Cultivomysqli();
	$existe = $perCultivo->existe($cultivo);
	
?>
<html>
<head>
	
</head>
<body>
<?php
	if($existe == false)
	{
		$perCultivo->guardar($cultivo);
?>
	<div class="textosMsj" align="center"><?php echo "Ingreso Nuevo Cultivo ".$cultivo->getCodigoClave()." exitoso";?></div>
	
<?php }else{ ?>
	<div class="textosMsj" align="center"><?php echo "Existe Cultivo con el Codio Clave ".$cultivo->getCodigoClave()."";?></div>
	<div class="textosMsj" align="center"><br><br><a style="background-color:#666666; font:trebuchet MS" href="altaCultivo.php"> &lt;&lt;Volver a Ingreso </a></div>
<?php } ?>
</body>
</html>