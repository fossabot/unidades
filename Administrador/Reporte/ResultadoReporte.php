<?php
	$id=$_GET['idP'];	
	$idCultivo=$_GET['idC'];	
	$NUnidad=$_GET['nU'];	
	require_once("../Clases/Persistencia/Persistencia_Potreromysqlii.php");
	require_once("../Clases/Persistencia/Persistencia_Cultivomysqlii.php");	
	require_once("../Clases/Persistencia/Persistencia_Tareamysqlii.php");
	$perPot = new Persistencia_Potreromysqlii();
	$potreros = $perPot->potrerosxid($id);
	$perCultivo = new Persistencia_Cultivomysqlii();
	$cultivo = $perCultivo->cultivoxid($idCultivo);
		
	$ci = mysqliii_fetch_array($cultivo);
	$idCul = $ci["idCultivo"];
	$nomC = $ci["Nombre"];
	$cc = $ci["CodigoClave"];
	$ts1 = $ci["TipoSuelo1"];
	$ts2 = $ci["TipoSuelo2"];
	$ts3 = $ci["TipoSuelo3"];
	$cat = $ci["Categoria"];
	$tpc = $ci["TipoPasturaCultivo"];
	$as = $ci["Anosiembra"];
	$fechainicio = $ci["FechaInicio"];	
	$fechafin = $ci["FechaFin"];
	
	$ci = mysqliii_fetch_array($potreros);
	$nom = $ci["Nombre"];
	$sup = $ci["Superficie"];
	$hectareas=$sup/10000;
	$est = $ci["Estado"];
	
	$perTarea = new Persistencia_Tareamysqlii();
	$tareasdp = $perTarea->buscarT($idCul);
	$divtareas= '<tr>';
	$i=0;
	$j=0;
	$infor= array ();
	$idTareaPrimera =0;
	while($ci = mysqliii_fetch_array($tareasdp)){
		$idTarea	=	$ci['idTarea'];
		if($i==0){$idTareaPrimera= $idTarea;}
		$info  = $ci['data'];
		$fecha=$ci['Fecha'];
		$nombre=$ci['NombreCat'];
		$datos=$nombre;
		$datos.=$fecha;
		
		$divtareas .="<td valign='top'><div> <h1  align='center' style='font-size:12px;border:1px solid  #666;'><strong>".$fecha."</strong></h1></br>".$info."</div></td>";
	
		$infor[$idTarea]=$datos;
		$i++;
		if($j==3){
			$divtareas.= '</tr><tr>';
			$j=0;
		}else{
		$j++;}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link href ="../Css/estiloTar.css" rel="stylesheet" type="text/css" media="screen" title="default">
<title>Gestión de Cultivo</title>
<script language="JavaScript1.2">
	<!--
	window.moveTo(0,0);
	if (document.all) {
	top.window.resizeTo(screen.availWidth,screen.availHeight);
	}
	else if (document.layers||document.getElementById) {
	if (top.window.outerHeight<screen.availHeight||top.window.outerWidth<screen.availWidth){
	top.window.outerHeight = screen.availHeight;
	top.window.outerWidth = screen.availWidth;
	}
	}
	//-->
</script>

<script>
function printDiv()
{
  var divToPrint=document.getElementById('resul');
  newWin= window.open("");
  newWin.document.write(divToPrint.outerHTML);
  newWin.print();
  newWin.close();
}

</script>
</head>
	
<body>
<div  id="resul" >
 <h1  align="center" style="font-size:16px;border:2px solid #000;">DETALLE DE CHACRA</BR> Cultivo: <?php echo $cc ?></h1>
</br>
 <h1  align="left" style="font-size:12px;border:1px solid  #000;">Datos Potrero</h1>

            <table style="font-size:12px"  id="customers">
				
				<tr>
								<td> <div>Potrero</div></td>
                                <td> <div><?php echo $nom ?> </div></td>
               </tr>
				<tr>
								<td> <div>Superficie</div></td>
                                <td> <div><?php echo $hectareas ?> Hectareas </div></td>
               </tr>
				<tr>
								<td> <div>Unidad</div></td>
                                <td> <div><?php echo $NUnidad ?> </div></td>
               </tr>
             </table>
 </br>
 <h1  align="left" style="font-size:12px;border:1px solid  #000;">Datos Cultivo</h1>

             <div align="center">
             <table style="font-size:12px" border="1" id="customers">
				<tr>
                    <th>	Tipo de suelo1	</th>
                    <th>	Tipo de suelo2	</th>
                    <th>	Tipo de suelo3	</th>
                    <th>	Año de siembra	</th>
                    <th>	Tipo Pastura/Cultivo	</th>
                    <th>	Categoria	</th>
                    <th>	Fecha Inicio	</th>                    
                    <th>	Fecha Fin	</th>

				</tr>	
				<tr>
                    			<td> <div align="center"><?php echo $ts1 ?> </div></td>  
                    			<td> <div align="center"><?php echo $ts2 ?> </div></td>  
                    			<td> <div align="center"><?php echo $ts3 ?> </div></td>  
                    			<td> <div align="center"><?php echo $as ?></div></td>  
                    			<td> <div align="center"><?php echo $tpc ?> </div></td>  
                    			<td> <div align="center"><?php echo $cat ?> </div></td>  
                    			<td> <div align="center"><?php echo $fechainicio ?> </div></td>  
                    			<td > <div align="center"><?php echo $fechafin ?> </div></td>  
             </table>
			</div></br>
 <h1  align="left" style="font-size:12px;border:1px solid  #000;">Tareas Realizadas</h1>
                       
            <table style="font-size:12px" align="right" >        
             <?php echo $divtareas ?> 
             </table>    

 </div> 
		</br></br>						
    <input  type="button" value="Imprimir Resultado" onclick="javascript:printDiv();"  class="btn"/>
					     
 </body>
</html>