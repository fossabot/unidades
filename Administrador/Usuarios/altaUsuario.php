<?php
require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");
$pUsuario = new Persistencia_Usuariomysqlii();
$usuario= $pUsuario->ultimoID();
$ci = mysqliii_fetch_array($usuario);
$proxId= $ci['idUsuario'];
$proxId = $proxId+1;
$usuariosEx=$pUsuario->buscarUE();
 $i="";
	  while ($ci = mysqliii_fetch_array($usuariosEx))
	  {
	  $id=$ci["Usuario"];
	  $i.=$id." ";						
	  }
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modifcar Usuario</title>
<link rel="stylesheet" type="text/css" href="../CSS/estiloTar.css" />
<script>

 
 function validarUsuario(){	  
	var usuarios =' <?php echo $i ?>';
	var correcto=true;
	var caja = document.getElementById("cajaUsuario");
	var n= 0;
	var ss = usuarios.split(" ");
		for (i=0;i< ss.length; i++) {
			if(ss[i]==caja.value)
			{
			document.getElementById("msj").innerHTML="El Usuario Ya Existe";
			correcto= false;
			}
		}
	if(caja.value.length<3){		
			document.getElementById("msj").innerHTML="El Usuario debe contener al menos 3 letras";
			correcto= false;
	}
	if(correcto){
		document.getElementById("botonG").disabled = false;		
		document.getElementById("msj").innerHTML="";
	}	 
 }

</script>
</head>

<body>
<div align="center">
<div class="divborde" style="width:450px; background:#EBEBEB">
<h1 style="color:#036; font-size:17px;">Nuevo Usuario</h1>
<form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaCultivo" method="GET" action="agregarUsuario.php"  >
				<table width="334px" cellspacing="0" cellpadding="12" class="textosForm" style="color:#036">
					<tr>
                    
					  <input class="cajasTextoForm" type="text" name="txtIdUsuario" required  value="<?php echo $proxId ?>" hidden="hidden"> </td>
					
                    
                    
                    <td width="74px" class="textosForm"> <div align="center">Cedula</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCedula" required > </td>
					</tr>
                                
					<td width="74px" class="textosForm"> <div align="center">Usuario</div></td>
					  <td width="260px"> 
  <input id="cajaUsuario" onBlur="javascript:validarUsuario()" class="cajasTextoForm" type="text" name="txtUsuario"  required> 
  <a id="msj" style="color:#F00"> </a></td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Contraseña</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtContrasena"  required> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Nombre</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombre"   contenteditable="false"> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Apellido</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtApellido"   contenteditable="false"> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Localidad</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtLocalidad"  contenteditable="false"> </td>
					</tr>
                                      
                    
                    <td width="74px" class="textosForm"> <div align="center">Nivel de Acceso</div></td>
					  <td width="260px"> <select NAME="selTipoUsuario" SIZE=1 required="required">
                      					  <option value="Buscador">Buscador de Informacion</option>
                                          <option value="Registro">Registrador de  Potreros, Cultivos y Tareas</option>
                                          <option value="Encargado">Encargado de Unidad</option>
                                        </select>  </td>
					</tr>

                    <td width="74px" class="textosForm"> <div align="center">Activo</div></td>
					    <td width="260px"> <select NAME="selActivo" SIZE=1>
                      					  <option value="SI">SI</option>
                                          <option value="NO">NO</option>
                                        </select>  </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Departamento</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDepartamento" contenteditable="false"> </td>
					</tr>
                    
                    <tr>
						<td colspan="2">
							<div align="center">
								<input type="submit" name="cmdEnvio" value="Guardar" id="botonG" disabled="disabled" class="boton2">
					        </div>
                           
						</td>
					</tr>
			  	</table>
			</form>
</div></div>
</body>
</html>