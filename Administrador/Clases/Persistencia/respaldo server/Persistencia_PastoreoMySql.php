<?php
	date_default_timezone_set("America/Montevideo");
	require_once("Persistencia_mysqlii.php");	
	class Persistencia_Pastoreomysqlii 
	extends Persistencia_mysqlii
	{
	//Guarda la siembra y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($pastoreo, $rend, $comp, $cultivo) {
	//Obtenemos ID y NOMBRE de Usuario creador.
	session_start();
	$idUsuario = $_SESSION['uid']; 
	$Nombre = $_SESSION['nombreU'];
		
	//Obtenemos Fecha y Hora Actual:
	$Fecha=getdate();
	$FechaTxt=$Fecha["year"]."-".$Fecha["mon"]."-".$Fecha["mday"];
	$HoraTxt=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha ["seconds"];
	
	//Creamos la informacion a mostrar de la tarea:
	$info = "<strong>Datos de Pastoreo: </strong> </br>				
AñoVida	:      "	.$pastoreo->getAnoVida	()."</br>
Número de pastoreo	:      "	.$pastoreo->getNumerodepastoreo	()."</br>
Fecha Inicio	:      "	.$pastoreo->getFechaInicio	()."</br>
Fecha Fin	:      "	.$pastoreo->getFechaFin	()."</br>
Categoria	:      "	.$pastoreo->getCategoria	()."</br>
Número de Animales	:      "	.$pastoreo->getNumAnimales	()."</br>
Metodo Pastoreo	:      "	.$pastoreo->getMetodoPastoreo	()."</br></br>
<strong> Rendimiento del Forraje:			</strong>	</br></br>
Fecha Muestreo	:      "	.$rend->getFechaMuestreo	()."</br>
Tipo	:      "	.$rend->getTipo	()."</br>
Metodo	:      "	.$rend->getMetodo	()."</br>
Largo Area	:      "	.$rend->getLargoArea	()."</br>
Ancho Area	:      "	.$rend->getAnchoArea	()."</br>
NumMuestras	:      "	.$rend->getNumMuestras	()."</br>
MS	:      "	.$rend->getMS	()."</br>
RendimientoPromedio	:      "	.$rend->getRendimientoPromedio	()."</br>
Desvio	:      "	.$rend->getDesvio	()."</br>
RendMuestra1	:      "	.$rend->getRendMuestra1	()."</br>
RendMuestra2	:      "	.$rend->getRendMuestra2	()."</br>
RendMuestra3	:      "	.$rend->getRendMuestra3	()."</br>
RendMuestra4	:      "	.$rend->getRendMuestra4	()."</br>
RendMuestra5	:      "	.$rend->getRendMuestra5	()."</br>
RendMuestra6	:      "	.$rend->getRendMuestra6	()."</br>
RendMuestra7	:      "	.$rend->getRendMuestra7	()."</br>
RendMuestra8	:      "	.$rend->getRendMuestra8	()."</br>
RendMuestra9	:      "	.$rend->getRendMuestra9	()."</br>
RendMuestra10	:      "	.$rend->getRendMuestra10	()."</br>
PVMuestra1	:      "	.$rend->getPVMuestra1	()."</br>
PVMuestra2	:      "	.$rend->getPVMuestra2	()."</br>
PVMuestra3	:      "	.$rend->getPVMuestra3	()."</br>
PVMuestra4	:      "	.$rend->getPVMuestra4	()."</br>
PVMuestra5	:      "	.$rend->getPVMuestra5	()."</br>
PVMuestra6	:      "	.$rend->getPVMuestra6	()."</br>
PVMuestra7	:      "	.$rend->getPVMuestra7	()."</br>
PVMuestra8	:      "	.$rend->getPVMuestra8	()."</br>
PVMuestra9	:      "	.$rend->getPVMuestra9	()."</br>
PVMuestra10	:      "	.$rend->getPVMuestra10	()."</br>
PSMuestra1	:      "	.$rend->getPSMuestra1	()."</br>
PSMuestra2	:      "	.$rend->getPSMuestra2	()."</br>
PSMuestra3	:      "	.$rend->getPSMuestra3	()."</br>
PSMuestra4	:      "	.$rend->getPSMuestra4	()."</br>
PSMuestra5	:      "	.$rend->getPSMuestra5	()."</br>
PSMuestra6	:      "	.$rend->getPSMuestra6	()."</br>
PSMuestra7	:      "	.$rend->getPSMuestra7	()."</br>
PSMuestra8	:      "	.$rend->getPSMuestra8	()."</br>
PSMuestra9	:      "	.$rend->getPSMuestra9	()."</br>
PSMuestra10	:      "	.$rend->getPSMuestra10	()."</br></br>
<strong> Composicion Botánica:				</strong></br></br>
FechaMuestreo	:      "	.$comp->getFechaMuestreo	()."</br>
VisuCB1	:      "	.$comp->getVisuCB1	()."</br>
VisuCB2	:      "	.$comp->getVisuCB2	()."</br>
VisuCB3	:      "	.$comp->getVisuCB3	()."</br>
VisuCB4	:      "	.$comp->getVisuCB4	()."</br>
VisuCB5	:      "	.$comp->getVisuCB5	()."</br>
VisuCB6	:      "	.$comp->getVisuCB6	()."</br>
VisuCB7	:      "	.$comp->getVisuCB7	()."</br>
VisuCB8	:      "	.$comp->getVisuCB8	()."</br>
VisuCB9	:      "	.$comp->getVisuCB9	()."</br>
VisuCB10	:      "	.$comp->getVisuCB10	()."</br>
GraviPVCB1	:      "	.$comp->getGraviPVCB1	()."</br>
GraviPVCB2	:      "	.$comp->getGraviPVCB2	()."</br>
GraviPVCB3	:      "	.$comp->getGraviPVCB3	()."</br>
GraviPVCB4	:      "	.$comp->getGraviPVCB4	()."</br>
GraviPVCB5	:      "	.$comp->getGraviPVCB5	()."</br>
GraviPVCB6	:      "	.$comp->getGraviPVCB6	()."</br>
GraviPVCB7	:      "	.$comp->getGraviPVCB7	()."</br>
GraviPVCB8	:      "	.$comp->getGraviPVCB8	()."</br>
GraviPVCB9	:      "	.$comp->getGraviPVCB9	()."</br>
GraviPVCB10	:      "	.$comp->getGraviPVCB10	()."</br>
GraviPSCB1	:      "	.$comp->getGraviPSCB1	()."</br>
GraviPSCB2	:      "	.$comp->getGraviPSCB2	()."</br>
GraviPSCB3	:      "	.$comp->getGraviPSCB3	()."</br>
GraviPSCB4	:      "	.$comp->getGraviPSCB4	()."</br>
GraviPSCB5	:      "	.$comp->getGraviPSCB5	()."</br>
GraviPSCB6	:      "	.$comp->getGraviPSCB6	()."</br>
GraviPSCB7	:      "	.$comp->getGraviPSCB7	()."</br>
GraviPSCB8	:      "	.$comp->getGraviPSCB8	()."</br>
GraviPSCB9	:      "	.$comp->getGraviPSCB9	()."</br>
GraviPSCB10	:      "	.$comp->getGraviPSCB10	()."</br>
Registrado Por:        ".$Nombre." / ".$FechaTxt."" ;

	
	//Guardamos la tarea referenciada a un Cultivo
	$this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt ."', 'Pastoreo', '".$info."', '"  . $cultivo . "', '"  . $idUsuario."', '"  .$HoraTxt."')");
	
	//Obtenemos el id de la tarea ingresada.
	  $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
					$ci = mysqliii_fetch_array($this->result);
					
        $TAREA=$ci['idTarea'];
		
	$sqlPO="INSERT INTO	pastoreo (AnoVida, NroPastoreo,	FechaInicio, FechaFin, Categoria, NroAnimales,	Metodo, idTarea	) VALUES ('". $pastoreo->getAnoVida()."', '" . $pastoreo->getNumerodepastoreo	()."', '" . $pastoreo->getFechaInicio()."', '" . $pastoreo->getFechaFin()."', '" . $pastoreo->getCategoria	()."', '" . $pastoreo->getNumAnimales()."', '" . $pastoreo->getMetodoPastoreo()."', '" . $TAREA ."')";
			$this->query($sqlPO);
	
	$sqlRF= "INSERT INTO	rendimientoforraje (Numerodepastoreo,	FechaMuestreo,	Tipo, Metodo	,LargoArea,	AnchoArea,	NumMuestras,	MS,		RendimientoPromedio,	Desvio,	RendMuestra1,	RendMuestra2,RendMuestra3,RendMuestra4,	RendMuestra5,	RendMuestra6,	RendMuestra7,	RendMuestra8,	RendMuestra9,	RendMuestra10,	PVMuestra1,	PVMuestra2,	PVMuestra3,	PVMuestra4,	PVMuestra5,	PVMuestra6,	PVMuestra7,	PVMuestra8,	PVMuestra9,	PVMuestra10,PSMuestra1,	PSMuestra2,	PSMuestra3,	PSMuestra4,	PSMuestra5,	PSMuestra6,	PSMuestra7,	PSMuestra8,	PSMuestra9,	PSMuestra10,idPastoreo	)						
	VALUES ('". $rend->getNumerodepastoreo	()."', '" . $rend->getFechaMuestreo	()."', '" . $rend->getTipo	()."', '" . $rend->getMetodo	()."', '" . $rend->getLargoArea	()."', '" . $rend->getAnchoArea	()."', '" . $rend->getNumMuestras	()."', '" . $rend->getMS	()."', '" . $rend->getRendimientoPromedio	()."', '" . $rend->getDesvio	()."', '" . $rend->getRendMuestra1	()."', '" . $rend->getRendMuestra2	()."', '" . $rend->getRendMuestra3	()."', '" . $rend->getRendMuestra4	()."', '" . $rend->getRendMuestra5	()."', '" . $rend->getRendMuestra6	()."', '" . $rend->getRendMuestra7	()."', '" . $rend->getRendMuestra8	()."', '" . $rend->getRendMuestra9	()."', '" . $rend->getRendMuestra10	()."', '" . $rend->getPVMuestra1	()."', '" . $rend->getPVMuestra2	()."', '" . $rend->getPVMuestra3	()."', '" . $rend->getPVMuestra4	()."', '" . $rend->getPVMuestra5	()."', '" . $rend->getPVMuestra6	()."', '" . $rend->getPVMuestra7	()."', '" . $rend->getPVMuestra8	()."', '" . $rend->getPVMuestra9	()."', '" . $rend->getPVMuestra10	()."', '" . $rend->getPSMuestra1	()."', '" . $rend->getPSMuestra2	()."', '" . $rend->getPSMuestra3	()."', '" . $rend->getPSMuestra4	()."', '" . $rend->getPSMuestra5	()."', '" . $rend->getPSMuestra6	()."', '" . $rend->getPSMuestra7	()."', '" . $rend->getPSMuestra8	()."', '" . $rend->getPSMuestra9	()."', '" . $rend->getPSMuestra10	()."', '" .$TAREA."')";
			$this->query($sqlRF);
	
	
			
	$sqlCB="INSERT INTO	composicionbotanica (	Numerodepastoreo	,
FechaMuestreo	,
VisuCB1	,
VisuCB2	,
VisuCB3	,
VisuCB4	,
VisuCB5	,
VisuCB6	,
VisuCB7	,
VisuCB8	,
VisuCB9	,
VisuCB10	,
GraviPVCB1	,
GraviPVCB2	,
GraviPVCB3	,
GraviPVCB4	,
GraviPVCB5	,
GraviPVCB6	,
GraviPVCB7	,
GraviPVCB8	,
GraviPVCB9	,
GraviPVCB10	,
GraviPSCB1	,
GraviPSCB2	,
GraviPSCB3	,
GraviPSCB4	,
GraviPSCB5	,
GraviPSCB6	,
GraviPSCB7	,
GraviPSCB8	,
GraviPSCB9	,
GraviPSCB10	, idPastoreo)
			
	VALUES ('" . $comp->getNumerodepastoreo	()."', '
" . $comp->getFechaMuestreo	()."', '
" . $comp->getVisuCB1	()."', '
" . $comp->getVisuCB2	()."', '
" . $comp->getVisuCB3	()."', '
" . $comp->getVisuCB4	()."', '
" . $comp->getVisuCB5	()."', '
" . $comp->getVisuCB6	()."', '
" . $comp->getVisuCB7	()."', '
" . $comp->getVisuCB8	()."', '
" . $comp->getVisuCB9	()."', '
" . $comp->getVisuCB10	()."', '
" . $comp->getGraviPVCB1	()."', '
" . $comp->getGraviPVCB2	()."', '
" . $comp->getGraviPVCB3	()."', '
" . $comp->getGraviPVCB4	()."', '
" . $comp->getGraviPVCB5	()."', '
" . $comp->getGraviPVCB6	()."', '
" . $comp->getGraviPVCB7	()."', '
" . $comp->getGraviPVCB8	()."', '
" . $comp->getGraviPVCB9	()."', '
" . $comp->getGraviPVCB10	()."', '
" . $comp->getGraviPSCB1	()."', '
" . $comp->getGraviPSCB2	()."', '
" . $comp->getGraviPSCB3	()."', '
" . $comp->getGraviPSCB4	()."', '
" . $comp->getGraviPSCB5	()."', '
" . $comp->getGraviPSCB6	()."', '
" . $comp->getGraviPSCB7	()."', '
" . $comp->getGraviPSCB8	()."', '
" . $comp->getGraviPSCB9	()."', '
" . $comp->getGraviPSCB10	()."', '
" . $TAREA."')"
;
				
			$this->query($sqlCB);
			echo ($sqlPO ."    </br>  " .$sqlCB."     </br>     ".$sqlRF);
    }

    
	

}
?>
