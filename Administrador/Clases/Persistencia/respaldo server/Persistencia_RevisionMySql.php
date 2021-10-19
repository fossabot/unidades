<?php
	date_default_timezone_set("America/Montevideo");	
	require_once("Persistencia_mysqlii.php");	
	class Persistencia_Revisionmysqlii 
	extends Persistencia_mysqlii
	{
	//Guarda la siembra y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo, $revision) {
	//Obtenemos ID y NOMBRE de Usuario creador.
	session_start();
	$idUsuario = $_SESSION['uid']; 
	$Nombre = $_SESSION['nombreU'];
		
	//Obtenemos Fecha y Hora Actual:
	$Fecha=getdate();
	$FechaTxt=$Fecha["year"]."-".$Fecha["mon"]."-".$Fecha["mday"];
	$HoraTxt=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha ["seconds"];
	
	//Creamos la informacion a mostrar de la tarea:
	$info = "Datos de Revisión:  </br>				
Fecha de Revisión	:      "	.$revision->getFechaderevision	()."</br>
Maleza1	:      "	.$revision->getMaleza1()."</br>
Maleza2	:      "	.$revision->getMaleza2()."</br>
Maleza3	:      "	.$revision->getMaleza3()."</br>
Maleza4	:      "	.$revision->getMaleza4()."</br>
Maleza5	:      "	.$revision->getMaleza5()."</br>
Insectos1	:      "	.$revision->getInsectos1()."</br>
Insectos2	:      "	.$revision->getInsectos2()."</br>
Insectos3	:      "	.$revision->getInsectos3()."</br>
Enfermedades1	:      "	.$revision->getEnfermedades1	()."</br>
Enfermedades2	:      "	.$revision->getEnfermedades2	()."</br>
Estado del cultivo	:      "	.$revision->getEstadodelcultivo	()."</br>
Observaciones	:"	.$revision->getObservaciones	()."</br>
Registrado Por:        ".$Nombre." ".$FechaTxt."" ;

	//Guardamos la tarea referenciada a un Cultivo
	$this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt ."', 'Revisión', '".$info."', '"  . $cultivo . "', '"  . $idUsuario."', '"  .$HoraTxt."')");
	
	//Obtenemos el id de la tarea ingresada.
	  $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
					$ci = mysqliii_fetch_array($this->result);
        
	//Guardamos la Información de la revisión referenciada a la tarea anterior.			
	$sql= "INSERT INTO	revision (Fechaderevision,	Maleza1	,	Maleza2, Maleza3,Maleza4 ,Maleza5	,Insectos1, Insectos2,	Insectos3,	Enfermedades1,	Enfermedades2,Estadodelcultivo,	Observaciones, idTarea	)	VALUES ('". $revision->getFechaderevision ()."', '" . $revision->getMaleza5	()."', '" . $revision->getMaleza1	()."', '" . $revision->getInsectos1	()."', '" . $revision->getMaleza2	()."', '" . $revision->getInsectos2	()."', '" . $revision->getMaleza3	()."', '" . $revision->getInsectos3	()."', '" . $revision->getMaleza4	()."', '" . $revision->getEnfermedades1	()."', '" . $revision->getEnfermedades2	()."', '" . $revision->getEstadodelcultivo	()."', '" . $revision->getObservaciones	()."','" . $ci['idTarea']."')";

		
	$this->query($sql);
    }
}
?>
