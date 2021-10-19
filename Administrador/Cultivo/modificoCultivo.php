<?php
	date_default_timezone_set("America/Montevideo");
	require_once("../Clases/Dominio/Dominio_Cultivo.php");
	require_once("../Clases/Persistencia/Persistencia_CultivoMySqli.php");
	$idP=$_GET['idPotrero'];
	$cultivo = new Dominio_Cultivo();
	$cultivo->setIdCultivo($_GET['idCultivo']);
	$cultivo->setNombre($_GET['txtNombre']);
	$cultivo->setTipoSuelo1($_GET['selTS1']);
	$cultivo->setTipoSuelo2($_GET['selTS2']);
	$cultivo->setTipoSuelo3($_GET['selTS3']);
	$cultivo->setTipoPasturaCultivo($_GET['selTipoPC']);
	$cultivo->setCategoria($_GET['selCat']);
	$cultivo->setAnosiembra($_GET['txtAnoSiembra']);
	$cultivo->setFechaFin($_GET['txtFF']);
	$cultivo->setFechaInicio($_GET['txtFI']);
	$Fecha=getdate();
	$perCultivo = new Persistencia_Cultivomysqli();
	$perCultivo->modificar($cultivo);

?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>

</head>
<body>
	    <script>
		alert("Cultivo Modificado!");
		window.location.href="../Potreros/elegirAcc.php?idP="+<?php echo $idP ?>+"&idC="+<?php echo $cultivo->getIdCultivo() ?>;
    	</script>
</body>
</html>