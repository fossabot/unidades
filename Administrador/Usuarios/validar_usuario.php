<?php
	include("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");
	session_start();
	
    $usuario=$_GET['txtuser'];
    $password=$_GET['txtpass'];
	$unidad=$_GET['selCombo']; 
	
	$pus = new Persistencia_Usuariomysqlii();
    $result = $pus->buscarU();
	while ($row = mysqliii_fetch_array($result))
		{	
		  if($row['Contrasena'] == $password){
			   $pos = strpos($row['Unidad'], $unidad);
				if($pos===false){
						   $_SESSION["k_username"] = $row['Usuario'];
				
						   $_SESSION["tipo"] = $row['TipoUsuario'];
				
								if($row['tipoUsuario']=="Leer"){
						
									header("Location:../../menuIni.php?"+$unidad);	
						
								}else if ($row['tipoUsuario']== "LeeryEscribir"){
						
								   header("Location:BIENVENIDA.php");
						
								}		 
				
						}else{
				
								echo  "<script type=\"text/javascript\">alert(\"Usuario o contrasena incorrecta\")
					
							window.location = '../../index.php';
					
								</script>";
						}
						
			}else{
				
				 echo "<script type=\"text/javascript\">alert(\"Usuario no Asignado a la Unidad seleccionada\")
	
			window.location = '../../index.php';
	
				  </script>";
	
				
			}
	
	   
	}
   
?>