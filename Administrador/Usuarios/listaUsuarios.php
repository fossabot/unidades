<?php 
session_start();
	require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");	
	require_once("../Clases/Persistencia/Persistencia_Unidadmysqlii.php");
	$perU = new Persistencia_Usuariomysqlii();
	$uni = $_SESSION['unidad'];
	$nombreUni = $_SESSION['NombreUnidad'];
	?>
    
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<style type="text/css">
table {

	font:Arial, Helvetica, sans-serif;

	font-size:16px;

	color:#030;

border-collapse: collapse;



}
body{
background:#aaa;
}


td {

border-bottom: 5px solid #ccc;

border-left: 3px dotted #ccc;

vertical-align: top;

min-width:100px;

padding: 1px;

border-style:groove;

}



tr {

background: #ACD7D7; 

border-left: 1px dotted #EBEBEB;

}

th {

background: #036;

color:#FFF;

}

tr:hover td{

	background: #ACC1D1;

	color:#036;
}
h1{color:#036;  text-shadow:
   -1px -1px 0 #ccc,
    1px -1px 0 #ccc,
   -1px 1px 0 #ccc,
    1px 1px 0 #ccc;}


</style>

<head>
<title>Lista de Usuarios</title>

<script>
function eliminar(idU){	
	if(confirm('¿Desafectar Usuario '+idU+' de la Unidad?')){
		window.location.href="desafectarUsuario.php?idUsuario="+idU+"";
	}	
}
function modificar(idU){	
	if(confirm('¿Modificar Usuario '+idU+' en la Unidad?')){
		window.location.href="modificarUsuario.php?idU="+idU+"";
	}
}

function cambioClave(idUsuario){	
  if(confirm('¿Resetear Clave del Usuario?')){
  document.getElementById('contenedor').style.display="block";	
  document.getElementById('contenedor').innerHTML="<a id='link' href='#' onClick='ocultar()'><img src='../Recursos/Imagenes/cerrar.png'></img></a> <iframe class='windowBox' style='display:block; background-color:#CCC; padding: 2em 0em;'src='cambiarContrase.php?idUsuario="+idUsuario+"'></iframe>";
  }	
}


function ocultar() {
	window.location.reload();
    document.getElementById('contenedor').style.display = 'none';
}
</script>

</head>

<body>
<div style="margin-top:5px; " align="center" >
<h1> Usuarios asignados a Unidad de <?php echo $nombreUni?> </h1>

			<table border="1" id="customers">
				<tr>
                	<th>	Cedula	</th>
					<th>	Usuario	</th>
                    <th>	Nombre	</th>
                    <th>	Apellido	</th>
                    <th>	Localidad	</th>
                    <th>	Tarea</th>
                    <th>	Activo	</th>
                    <th>	Departamento	</th>
                    <th>	Modificar	</th>
                    <th>	Desafectar	</th>  
                    <th>	Reseteo</th> 

				</tr>	
					<?php 
					
					$usuarios= $perU->buscarUxId($uni);
					while ($es = mysqliii_fetch_array($usuarios))
						{ 
							$usu = $es["idUsuario"] ;
							$nusu = $es["Usuario"] ;
						?>
							<tr>
								<td> <div align="center"><?php echo $es["Cedula"] ?> </div></td>
                    			<td> <div align="center"><?php echo $nusu ?> </div></td>
                    			<td> <div align="center"><?php echo $es["Nombre"]?></div></td>
                    			<td> <div align="center"><?php echo $es["Apellido"] ?> </div></td>  
                    			<td> <div align="center"><?php echo $es["Localidad"] ?> </div></td>  
                    			<td> <div align="center"><?php echo $es["Tipo"] ?> </div></td>  
                    			<td> <div align="center"><?php echo $es["Activo"] ?> </div></td>  
                    			<td> <div align="center"><?php echo $es["Departamento"] ?> </div></td>  
					    		<td> <div align="center"><a href="#" onClick="modificar('<?php echo $usu?>')"><img src="../Recursos/Imagenes/modificar.png"></img></a></div></td>
                           		<td> <div align="center"><a href="#" onClick="eliminar('<?php echo $nusu ?>')"><img src="../Recursos/Imagenes/eliminar.png"></img></a></div></td>	  
                                <td> <div align="center"><a href="#" onClick="cambioClave('<?php echo $usu ?>')"><img src="../Recursos/Imagenes/llave.png"></img></a></div></td>	                                   
                 
					<?php 
						  	
						}  ?>			
			</table>
		
       </div>
     
</body>
</html>