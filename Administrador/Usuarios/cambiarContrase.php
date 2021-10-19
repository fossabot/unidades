<?php	$idUsuario = $_GET['idU'];?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../CSS/estiloLog.css" rel="stylesheet" type="text/css">
<title>Cambio Contraseña</title>
</head>

<body>
<form id="frmlogin" name="frmlogin"  method="POST" action="cambioContrase.php" class="login">
    
    <div><input  id="idUsuario" name="idUsuario" type="hidden" value="<?php echo $idUsuario ?>"></div>
    
    <div><label>NUEVA CONTRASEÑA</label><input id="cont1" name="cont1" type="text"  required></div>

    <div><label>REPITA CONTRASEÑA</label><input  id="cont2" name="cont2" type="text" required></div>

    <div><input type="submit" name="enviar" value="CAMBIAR"></div>
</form>
</body>
</html>