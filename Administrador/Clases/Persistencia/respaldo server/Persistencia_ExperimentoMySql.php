<?php
	date_default_timezone_set("America/Montevideo");	
	require_once("Persistencia_mysqlii.php");	
	class Persistencia_Experimentomysqlii 
	extends Persistencia_mysqlii
	{
	//Guarda el experimento  y una nueva tarea que llega por par�metro en la tabla "tarea".
    public function guardar($experimento) {
	//Obtenemos ID y NOMBRE de Usuario creador.
	session_start();
	$idUsuario = $_SESSION['uid']; 
	$Nombre = $_SESSION['nombreU'];		
	//Guardamos la Información de la siembra referenciada a la tarea anterior.			
	$sql = "INSERT INTO	experimento (CodECR	, FechaSiembra,	Autor,	NombreCompBot1, NombreCompBot2,	NombreCompBot3,	NombreCompBot4,	NombreCompBot5,	NombreCompBot6,	NombreCompBot7,	NombreCompBot8,	NombreCompBot9,	NombreCompBot10,	Grupodeensayo	,	nutriente	,	dosis	,	fuente	,	FechaCierreExperiento	,	CITRICO	,	SS	,	PMN	,	NITRATO	,	NNH4	,	K	,	OTRO	,	Bray1M2	,	ResinasM2	,	CITRICOM2	,	SSM2	,	PMNM2	,	NITRATOM2	,	NNH4M2	,	KM2	,	OTROM2	,	Bray1M3	,	ResinasM3	,	CITRICOM3	,	SSM3	,	PMNM3	,NITRATOM3	,	NNH4M3	,	KM3	,	OTROM3	,	MELEGIDAB1	,MELEGIDAR	,	MELEGIDAC	,	MELEGIDASS	,	MELEGIDAPMN	,	MELEGIDAN	,	MELEGIDANH4	, MELEGIDAK	, MELEGIDAO, Potrero) VALUES ('". $experimento->getCodECR()."', '" . $experimento->getFechaSiembra	()."', '" . $experimento->getAutor()."', '" . $experimento->getNombreCompBot1	()."', '" . $experimento->getNombreCompBot2	()."', '" . $experimento->getNombreCompBot3	()."', '" . $experimento->getNombreCompBot4	()."', '" . $experimento->getNombreCompBot5	()."', '" . $experimento->getNombreCompBot6	()."', '" . $experimento->getNombreCompBot7	()."', '" . $experimento->getNombreCompBot8	()."', '" . $experimento->getNombreCompBot9	()."', '" . $experimento->getNombreCompBot10	()."', '" . $experimento->getGrupodeensayo	()."', '" . $experimento->getnutriente	()."', '" . $experimento->getdosis	()."', '" . $experimento->getfuente	()."', '" . $experimento->getFechaCierreExperiento	()."', '" . $experimento->getCITRICO	()."', '" . $experimento->getSS	()."', '" . $experimento->getPMN	()."', '" . $experimento->getNITRATO	()."', '" . $experimento->getNNH4	()."', '" . $experimento->getK	()."', '" . $experimento->getOTRO	()."', '" . $experimento->getBray1M2	()."', '" . $experimento->getResinasM2	()."', '" . $experimento->getCITRICOM2	()."', '" . $experimento->getSSM2	()."', '" . $experimento->getPMNM2	()."', '" . $experimento->getNITRATOM2	()."', '" . $experimento->getNNH4M2	()."', '" . $experimento->getKM2	()."', '" . $experimento->getOTROM2	()."', '" . $experimento->getBray1M3	()."', '" . $experimento->getResinasM3	()."', '" . $experimento->getCITRICOM3	()."', '" . $experimento->getSSM3	()."', '" . $experimento->getPMNM3	()."', '" . $experimento->getNITRATOM3	()."', '" . $experimento->getNNH4M3	()."', '" . $experimento->getKM3	()."', '" . $experimento->getOTROM3	()."', '" . $experimento->getMELEGIDAB1	()."', '" . $experimento->getMELEGIDAR	()."', '" . $experimento->getMELEGIDAC	()."', '" . $experimento->getMELEGIDASS	()."', '" . $experimento->getMELEGIDAPMN	()."', '" . $experimento->getMELEGIDAN	()."', '" . $experimento->getMELEGIDANH4	()."', '" . $experimento->getMELEGIDAK	()."', '" . $experimento->getMELEGIDAO()."', '" . $experimento->getPotrero()."')";
	
	$this->query($sql);
    }

		//Devuelve todos los datos los experimentos realizados en el potrero enviado por parametro.
	public function experimentos($potrero){
	$sql= "SELECT idExperimento, CodECR	,FechaSiembra	,Autor	,NombreCompBot1	,NombreCompBot2	,NombreCompBot3	,NombreCompBot4	,NombreCompBot5	,NombreCompBot6	,NombreCompBot7	,NombreCompBot8	,NombreCompBot9	,NombreCompBot10	,Grupodeensayo	,nutriente	,dosis	,fuente	,FechaCierreExperiento	,CITRICO	,SS	,PMN	,NITRATO	,NNH4	,K	,OTRO	,Bray1M2	,ResinasM2	,CITRICOM2	,SSM2	,PMNM2	,NITRATOM2	,NNH4M2	,KM2	,OTROM2	,Bray1M3	,ResinasM3	,CITRICOM3	,SSM3	,PMNM3	,NITRATOM3	,NNH4M3	,KM3	,OTROM3	,MELEGIDAB1	,MELEGIDAR	,MELEGIDAC	,MELEGIDASS	,MELEGIDAPMN	,MELEGIDAN	,MELEGIDANH4,	MELEGIDAK	,MELEGIDAO, Estado
			FROM experimento
			WHERE Potrero=".$potrero."";
	$this->query($sql);
	return $this->result;
		
	}
		//Experimentos realizados en la unidad enviada por parametro.
	public function experimentosUnidad($u){
	$sql= "SELECT idExperimento, CodECR	,FechaSiembra	,Autor	,NombreCompBot1	,NombreCompBot2	,NombreCompBot3	,NombreCompBot4	,NombreCompBot5	,NombreCompBot6	,NombreCompBot7	,NombreCompBot8	,NombreCompBot9	,NombreCompBot10	,Grupodeensayo	,nutriente	,dosis	,fuente	,FechaCierreExperiento	,CITRICO	,SS	,PMN	,NITRATO	,NNH4	,K	,OTRO	,Bray1M2	,ResinasM2	,CITRICOM2	,SSM2	,PMNM2	,NITRATOM2	,NNH4M2	,KM2	,OTROM2	,Bray1M3	,ResinasM3	,CITRICOM3	,SSM3	,PMNM3	,NITRATOM3	,NNH4M3	,KM3	,OTROM3	,MELEGIDAB1	,MELEGIDAR	,MELEGIDAC	,MELEGIDASS	,MELEGIDAPMN	,MELEGIDAN	,MELEGIDANH4,	MELEGIDAK	,MELEGIDAO, Estado
			FROM experimento
			WHERE Potrero IN(SELECT idPotrero
							 FROM potrero
							 WHERE idUnidad=".$u.")";
	$this->query($sql);
	return $this->result;
		
	}
	//Eliminamos el experimento enviado por parametro.
	public function eliminarExperimento($exp){
	$this->query("DELETE FROM 	experimento	WHERE idExperimento= ".$exp);	
	}
	//Finalizamos el experimento enviado por parametro.
	public function finalizarExperimento($exp){
	$this->query("UPDATE experimento SET Estado='Cerrado' WHERE idExperimento= ".$exp);	
	}
}
?>
