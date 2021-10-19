<?php
	date_default_timezone_set("America/Montevideo");
	require_once("Persistencia_mysqlii.php");
	class Persistencia_Aplicacionmysqlii 
	extends Persistencia_mysqlii
	{
	//Guarda la aplicacion y una nueva tarea que llega por par�metro en la tabla "tarea".
    public function guardar($cultivo, $aplicacion) {
	//Obtenemos ID y NOMBRE de Usuario creador.
	session_start();
	$idUsuario = $_SESSION['uid']; 
	$Nombre = $_SESSION['nombreU'];		
	//Obtenemos Fecha y Hora Actual:
	$Fecha=getdate();
	$FechaTxt=$Fecha["year"]."-".$Fecha["mon"]."-".$Fecha["mday"];
	$HoraTxt=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha ["seconds"];	
	//Creamos la informacion a mostrar de la tarea:
	$info = "<strong>Datos de Aplicación:</strong>  </br>				
Tipodeaplicacion	:      "	.$aplicacion->getTipodeaplicacion	()."</br>
Fecha	:      "	.$aplicacion->getFecha	()."</br>
Hora	:      "	.$aplicacion->getHora	()."</br>
Metodo	:      "	.$aplicacion->getMetodo	()."</br>
Maquina	:      "	.$aplicacion->getMaquina	()."</br>
Maquinista	:      "	.$aplicacion->getMaquinista	()."</br>
Productocomercial	:      "	.$aplicacion->getProductocomercial	()."</br>
Dosis	:      "	.$aplicacion->getDosis	()."</br>
Unidad	:      "	.$aplicacion->getUnidad	()."</br>
Estadodelcultivo	:      "	.$aplicacion->getEstadodelcultivo	()."</br>
Observaciones	:      "	.$aplicacion->getObservaciones	()."</br>
Registrado Por:        ".$Nombre." ".$FechaTxt."" ;	
	
	//Guardamos la tarea referenciada a un Cultivo
	$this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt ."', 'Aplicacion', '".$info."', '"  . $cultivo . "', '"  . $idUsuario."', '"  .$HoraTxt."')");
	
	//Obtenemos el id de la tarea ingresada.
	  $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
					$ci = mysqliii_fetch_array($this->result);
        
	//Guardamos la Información de la Aplicacion referenciada a la tarea anterior.			
	$sql= "INSERT INTO	aplicacion (Tipodeaplicacion	,Fecha	,Hora	,Metodo	,Maquina,Maquinista	,Productocomercial	,Dosis	,Unidad	,Estadodelcultivo	,Observaciones	, idTarea)	VALUES ('"				
. $aplicacion->getTipodeaplicacion	()."', '" . $aplicacion->getMaquinista	()."', '" . $aplicacion->getFecha	()."', '" . $aplicacion->getProductocomercial	()."', '" . $aplicacion->getHora	()."', '" . $aplicacion->getDosis	()."', '" . $aplicacion->getMetodo	()."', '" . $aplicacion->getUnidad	()."', '" . $aplicacion->getMaquina	()."', '" . $aplicacion->getEstadodelcultivo	()."', '" . $aplicacion->getObservaciones	()."', '". $ci['idTarea']."')";
					$this->query($sql);
    }
}
?>
