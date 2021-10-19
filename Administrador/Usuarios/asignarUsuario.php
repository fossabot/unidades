<?php 
session_start();
	require_once("../Clases/Persistencia/Persistencia_Usuariomysqlii.php");	
	require_once("../Clases/Persistencia/Persistencia_Unidadmysqlii.php");
	$perU = new Persistencia_Usuariomysqlii();
	$uni = $_SESSION['unidad'];
	$nombreUni = $_SESSION['NombreUnidad'];
	?>
    
<html>
<head>
<link href ="../Css/estiloTar.css" rel="stylesheet" type="text/css" media="screen" title="default">
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asignar Usuario</title>
<script>
function asignar(idU){
	window.location.href="agregarAUnidad.php?idU="+idU+"";
}
</script>
</head>

<body>
<div style="margin-top:5px; " align="center" >
<h1 style="color:#036"> Usuarios sin permisos en Unidad de <?php echo $nombreUni?> </h1>
			<table border="1" id="customers">
				<tr>
                	<th> Cédula	</th>
					<th> Usuario	</th>
                    <th> Nombre	</th>
                    <th> Apellido</th>
                    <th> Asingar </th>

				</tr>	
					<?php 
					
					$usuarios= $perU->buscarNoAsig($uni);
					while ($es = mysqliii_fetch_array($usuarios))
						{ 
							$usu = $es["Usuario"] ;
						?>
							<tr>
								<td> <div align="center"><?php echo $es["Cedula"] ?> </div></td>
                    			<td> <div align="center"><?php echo $es["Usuario"] ?> </div></td>
                    			<td> <div align="center"><?php echo $es["Nombre"]?></div></td>
                    			<td> <div align="center"><?php echo $es["Apellido"] ?> </div></td>   
					    		<td> <div align="center"><a href="#" onClick="asignar(<?php echo "'".$usu."'"?>)"><img src="../Recursos/Imagenes/ok.png"></img></a></div></td>	                                     
                 
					<?php 
						  	
						}  ?>			
			</table>
		
       
    </div>
     <div  id = 'contenedor'style="display:none;" ></div>
     
</body>
</html>