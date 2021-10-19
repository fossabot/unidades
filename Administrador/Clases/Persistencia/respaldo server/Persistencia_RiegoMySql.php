<?php
	date_default_timezone_set("America/Montevideo");	
	require_once("Persistencia_mysqlii.php");	
	class Persistencia_Riegomysqlii 
	extends Persistencia_mysqlii
	{
	//Guarda la siembra y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo, $riego) {
	//Obtenemos ID y NOMBRE de Usuario creador.
	session_start();
	$idUsuario = $_SESSION['uid']; 
	$Nombre = $_SESSION['nombreU'];
		
	//Obtenemos Fecha y Hora Actual:
	$Fecha=getdate();
	$FechaTxt=$Fecha["year"]."-".$Fecha["mon"]."-".$Fecha["mday"];
	$HoraTxt=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha ["seconds"];
	
	//Creamos la información a mostrar de la tarea:
	$info = "Datos de Riego:  </br>				
Fecha:      		   ".$riego->getFecha()."</br>
Metodo:      		   ".$riego->getMetodo()."</br>
Volumen: 		       ".$riego->getVolumen()."</br>
Criterio de riego:     ".$riego->getCriterioderiego()."</br>
Equipo de riego:       ".$riego->getEquipoderiego()."</br>
Fuente de agua:        ".$riego->getFuentedeagua()."</br>
Registrado Por:        ".$Nombre." ".$FechaTxt."" ;

	//Guardamos la tarea referenciada a un Cultivo
	$this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt ."', 'Riego', '".$info."', '"  . $cultivo . "', '"  . $idUsuario."', '"  .$HoraTxt."')");
	
	//Obtenemos el id de la tarea ingresada.
	  $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
					$ci = mysqliii_fetch_array($this->result);
        
	//Guardamos la Información del riego referenciada a la tarea anterior.			
	$sql= "INSERT INTO	riego (Fecha, Metodo, Volumen, Criterioderiego, Equipoderiego,Fuentedeagua, idTarea)		
							
	VALUES ('".$riego->getFecha	()."', '" .$riego->getMetodo()."', '" .$riego->getVolumen()."', '" .$riego->getCriterioderiego	()."', '" . $riego->getEquipoderiego()."', '" . $riego->getFuentedeagua()."', '" . $ci['idTarea']."')";
			
				$this->query($sql);
    }
}
?>
