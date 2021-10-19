<?php
	date_default_timezone_set("America/Montevideo");	
	require_once("Persistencia_mysqlii.php");	
	class Persistencia_Reservamysqlii 
	extends Persistencia_mysqlii
	{
	//Guarda la reserva y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo, $reserva) {
	//Obtenemos ID y NOMBRE de Usuario creador.
	session_start();
	$idUsuario = $_SESSION['uid']; 
	$Nombre = $_SESSION['nombreU'];
		
	//Obtenemos Fecha y Hora Actual:
	$Fecha=getdate();
	$FechaTxt=$Fecha["year"]."-".$Fecha["mon"]."-".$Fecha["mday"];
	$HoraTxt=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha ["seconds"];
	
	//Creamos la informacion a mostrar de la tarea:
	$info = "Chacra con Destino a Reserva:  </br>				
Tipo	:      "	.$reserva->getTipo	()."</br>
Fecha de Corte	:      "	.$reserva->getFechadeCorte	()."</br>
HoraCorte	:      "	.$reserva->getHoraCorte	()."</br>
MaquinaCorte	:      "	.$reserva->getMaquinaCorte	()."</br>
Maquinista	:      "	.$reserva->getMaquinista	()."</br>
ObservacionesCorte	:      "	.$reserva->getObservacionesCorte	()."</br>
FechaMovimiento1	:      "	.$reserva->getFechaMovimiento1	()."</br>
HoraMov1	:      "	.$reserva->getHoraMov1	()."</br>
MaquinaMov1	:      "	.$reserva->getMaquinaMov1	()."</br>
MaquinistaMov1	:      "	.$reserva->getMaquinistaMov1	()."</br>
ObservacionesMov1	:      "	.$reserva->getObservacionesMov1	()."</br>
FechaMovimiento2	:      "	.$reserva->getFechaMovimiento2	()."</br>
HoraMov2	:      "	.$reserva->getHoraMov2	()."</br>
MaquinaMov2	:      "	.$reserva->getMaquinaMov2	()."</br>
MaquinistaMov2	:      "	.$reserva->getMaquinistaMov2	()."</br>
ObservacionesMov2	:      "	.$reserva->getObservacionesMov2	()."</br>
FechaReserva	:      "	.$reserva->getFechaReserva	()."</br>
MaquinaReserva	:      "	.$reserva->getMaquinaReserva	()."</br>
NumeroReserva	:      "	.$reserva->getNumeroReserva	()."</br>
UnidadReserva	:      "	.$reserva->getUnidadReserva	()."</br>
PesoEstimadoUnidad	:      "	.$reserva->getPesoEstimadoUnidad	()."</br>
RendimientoEstimado	:      "	.$reserva->getRendimientoEstimado	()."</br>
VisualCompB1	:      "	.$reserva->getVisualCompB1	()."</br>
VisualCompB2	:      "	.$reserva->getVisualCompB2	()."</br>
VisualCompB3	:      "	.$reserva->getVisualCompB3	()."</br>
VisualCompB4	:      "	.$reserva->getVisualCompB4	()."</br>
VisualCompB5	:      "	.$reserva->getVisualCompB5	()."</br>
VisualCompB6	:      "	.$reserva->getVisualCompB6	()."</br>
VisualCompB7	:      "	.$reserva->getVisualCompB7	()."</br>
VisualCompB8	:      "	.$reserva->getVisualCompB8	()."</br>
VisualCompB9	:      "	.$reserva->getVisualCompB9	()."</br>
VisualCompB10	:      "	.$reserva->getVisualCompB10	()."</br>
Registrado Por:        ".$Nombre." ".$FechaTxt."" ;
	
	//Guardamos la tarea referenciada a un Cultivo
	$this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt ."', 'Reserva', '".$info."', '"  . $cultivo . "', '"  . $idUsuario."', '"  .$HoraTxt."')");
	
	//Obtenemos el id de la tarea ingresada.
	  $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
					$ci = mysqliii_fetch_array($this->result);
        
	//Guardamos la Información de la reseva referenciada a la tarea anterior.			
	$sql= "INSERT INTO	reserva (	Tipo	,	FechaMovimiento1	,	HoraMov2	,	NumeroReserva	,	VisualCompB3	,	FechadeCorte	,	HoraMov1	,	MaquinaMov2	,	UnidadReserva	,	VisualCompB4	,		HoraCorte	,	MaquinaMov1	,	MaquinistaMov2	,	PesoEstimadoUnidad	,	VisualCompB5	,		MaquinaCorte	,	MaquinistaMov1	,	ObservacionesMov2	,	RendimientoEstimado	,	VisualCompB6	,		Maquinista	,	ObservacionesMov1	,	FechaReserva	,	VisualCompB1	,	VisualCompB7	,	ObservacionesCorte	,	FechaMovimiento2	,	MaquinaReserva	,	VisualCompB2	,	VisualCompB8,VisualCompB9	,	VisualCompB10, idTarea	)	VALUES ('". $reserva->getTipo	()."', '" . $reserva->getFechaMovimiento1	()."', '" . $reserva->getHoraMov2	()."', '" . $reserva->getNumeroReserva	()."', '" . $reserva->getVisualCompB3	()."', '" . $reserva->getFechadeCorte	()."', '" . $reserva->getHoraMov1	()."', '" . $reserva->getMaquinaMov2	()."', '" . $reserva->getUnidadReserva	()."', '" . $reserva->getVisualCompB4	()."', '" . $reserva->getHoraCorte	()."', '" . $reserva->getMaquinaMov1	()."', '" . $reserva->getMaquinistaMov2	()."', '" . $reserva->getPesoEstimadoUnidad	()."', '" . $reserva->getVisualCompB5	()."', '" . $reserva->getMaquinaCorte	()."', '" . $reserva->getMaquinistaMov1	()."', '" . $reserva->getObservacionesMov2	()."', '" . $reserva->getRendimientoEstimado	()."', '" . $reserva->getVisualCompB6	()."', '" . $reserva->getMaquinista	()."', '" . $reserva->getObservacionesMov1	()."', '" . $reserva->getFechaReserva	()."', '" . $reserva->getVisualCompB1	()."', '" . $reserva->getVisualCompB7	()."', '" . $reserva->getObservacionesCorte	()."', '" . $reserva->getFechaMovimiento2	()."', '" . $reserva->getMaquinaReserva	()."', '" . $reserva->getVisualCompB2	()."', '" . $reserva->getVisualCompB8	()."', '" . $reserva->getVisualCompB9	()."', '" . $reserva->getVisualCompB10()."', '". $ci['idTarea']."')";
			echo $sql;
				$this->query($sql);
    }
}
?>
