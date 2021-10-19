<?php 
	$id = $_GET['idU'];
	require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");
	$pusuario = new Persistencia_Usuariomysqlii();
	$usuarios = $pusuario->usuarioxid($id);
	$ci = mysqliii_fetch_array($usuarios);
	$Cedula	= $ci["Cedula"];
	$Usuario	= $ci["Usuario"];
	$Contrasena	= $ci["Contrasena"];
	$Nombre	= $ci["Nombre"];
	$Apellido	= $ci["Apellido"];
	$Localidad	= $ci["Localidad"];
	$Tarea	= $ci["Tipo"];
	$Activo	= $ci["Activo"];
	$Departamento	= $ci["Departamento"];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modifcar Usuario</title>
<link rel="stylesheet" type="text/css" href="../CSS/estiloTar.css" />
</head>

<body>
<div align="center">
<h1 style="color:#036; font-size:17px;">Modificar Usuario</h1>
<form id="fom" onSubmit="return submitCultivo(this)" name="frmAltaCultivo" method="GET" action="agregarUsuario.php" >
				<table width="334px" cellspacing="0" cellpadding="12" class="textosForm" style="color:#036">
					<tr>
                    
					<td width="74px" class="textosForm"> <div align="center">ID Usuario</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtIdUsuario" required value="<?php echo $id ?>"> </td>
					</tr>
                    
                    
                    <td width="74px" class="textosForm"> <div align="center">Cedula</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtCedula" required value="<?php echo $Cedula ?>"> </td>
					</tr>
                                
					<td width="74px" class="textosForm"> <div align="center">Usuario</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtUsuario" id="txtNombre" required value="<?php echo $Usuario ?>"> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Contraseña</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtContrasena"  required  value="<?php echo $Contrasena ?>"> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Nombre</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtNombre"  value="<?php echo $Nombre ?>"  contenteditable="false"> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Apellido</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtApellido"  value="<?php echo $Apellido ?>"  contenteditable="false"> </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Localidad</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtLocalidad"  value="<?php echo $Localidad ?>"  contenteditable="false"> </td>
					</tr>
                                      
                    
                    <td width="74px" class="textosForm"> <div align="center">Nivel de Acceso</div></td>
					  <td width="260px"> <select NAME="selTipoUsuario" SIZE=1 required="required">
                      					  <option value="<?php echo $Tarea ?>"><?php echo $Tarea ?></option>
                      					  <option value="Buscador">Buscador de Informacion</option>
                                          <option value="Registro">Registro Potreros, Cultivos y Tareas</option>
                                          <option value="Encargado">Gestión de Unidad</option>
                                        </select>  </td>
					</tr>

                    <td width="74px" class="textosForm"> <div align="center">Activo</div></td>
					    <td width="260px"> <select NAME="selActivo" SIZE=1>
                      					  <option value="SI">SI</option>
                                          <option value="NO">NO</option>
                                        </select>  </td>
					</tr>
                    
                    <td width="74px" class="textosForm"> <div align="center">Departamento</div></td>
					  <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDepartamento" value="<?php echo $Departamento ?>"  contenteditable="false"> </td>
					</tr>
                    
                    <tr>
						<td colspan="2">
							<div align="center">
								<input type="submit" name="cmdEnvio" value="Guardar" class="boton2">
					        </div>
                           
						</td>
					</tr>
			  	</table>
			</form>
            </div>
</body>
</html>