<?php
	date_default_timezone_set("America/Montevideo");
	require_once("Persistencia_mysqlii.php");
	class Persistencia_Tareamysqlii 
	extends Persistencia_mysqlii
	{
		//Seleccionamos las tareas de un cultivo.
		public function buscarT($idCult)
		{
			$this->query("SELECT idTarea, Fecha, data, NombreCat FROM tarea WHERE idCultivo=".$idCult." ORDER BY Fecha");			
			return $this->result;
		}
		//Buscamos una tarea por le id de la misma.
		public function buscarTXId($idT)
		{
			$this->query("SELECT data FROM tarea WHERE idTarea=".$idT);			
			return $this->result;
		}
		//Eliminamos una tarea con el id de la tarea enviada por parametro.
		public function eliminartarea($idTarea){
		$this->query("DELETE FROM 	analisispastura	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	analisissuelo	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	aplicacion	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	cultivo	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	destinogranosemilla	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	laboreo	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	pastoreo	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	reserva	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	revision	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	riego	WHERE idTarea= ".$idTarea);
		$this->query("DELETE FROM 	siembra	WHERE idTarea= ".$idTarea);				
		$this->query("DELETE FROM tarea WHERE idTarea= ".$idTarea);
		}
	}
?>
