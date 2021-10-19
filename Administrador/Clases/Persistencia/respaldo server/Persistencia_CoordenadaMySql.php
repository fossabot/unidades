<?php
	
	require_once("Persistencia_mysqlii.php");
	require_once("../Clases/Dominio/Dominio_Coordenada.php");
	
	class Persistencia_Coordenadamysqlii 
	extends Persistencia_mysqlii
	{
		//Guarda el paseo que llega por parámetro en la tabla paseo.
		public function guardar($coordenada, $potrero)
		{
			$NCord = new Dominio_Coordenada();
			$NCord = $coordenada;
			$lat =$NCord->getLatitud();
			$lng = $NCord->getLongitud();	
			$this->query("INSERT INTO coordenada(Latitud, Longitud, idPotrero) VALUES(" . $lng . "," . $lat .",". $potrero .")");
		}
		
		public function coordenadas()
		{
			$this->query("SELECT coordenada.Latitud, coordenada.Longitud, coordenada.idPotrero
						  FROM coordenada
						  ORDER BY coordenada.idPotrero");			
			return $this->result;
		}

	}
?>
