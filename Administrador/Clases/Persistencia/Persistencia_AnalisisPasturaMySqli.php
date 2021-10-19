<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_mysqli.php");

class Persistencia_AnalisisPasturamysqli extends Persistencia_mysqli {

    public function guardar($cultivo, $ap) {
        //Obtenemos ID y NOMBRE de Usuario creador.
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];
        //Obtenemos Fecha y Hora Actual:
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
        //Creamos la informacion a mostrar de la tarea:
        $info = "<strong>Datos de Análisis  Pastura:</strong>  </br>				
			MS	:      " . $ap->getMS() . "</br>
			Cenizas	:      " . $ap->getCenizas() . "</br>
			PC	:      " . $ap->getPC() . "</br>
			FDA	:      " . $ap->getFDA() . "</br>
			FDN	:      " . $ap->getFDN() . "</br>
			N	:      " . $ap->getN() . "</br>
			NNH4	:      " . $ap->getNNH4() . "</br>
			P	:      " . $ap->getP() . "</br>
			Energia	:      " . $ap->getEnergia() . "</br>
			ExtratoEtereo	:      " . $ap->getExtratoEtereo() . "</br>

			Registrado Por:        " . $Nombre . " " . $FechaTxt . "";
        //Guardamos la tarea referenciada a un Cultivo
        $this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt . "', 'Analisis Pastura', '" . $info . "', '" . $cultivo . "', '" . $idUsuario . "', '" . $HoraTxt . "')");
        //Obtenemos el id de la tarea ingresada.
        $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);
        //Guardamos la Información del Analisis de Pastura referenciada a la tarea anterior.			
        $sql = "INSERT INTO	analisispastura (	MS	,Cenizas,PC	,FDA,FDN,N,	NNH5,P,	Energia	,ExtratoEtereo	,idTarea	)	VALUES ('" . $ap->getMS() . "', '" . $ap->getCenizas() . "', '" . $ap->getPC() . "', '" . $ap->getFDA() . "', '" . $ap->getFDN() . "', '" . $ap->getN() . "', '" . $ap->getNNH4() . "', '" . $ap->getP() . "', '" . $ap->getEnergia() . "', '" . $ap->getExtratoEtereo() . "', '" . $ci['idTarea'] . "')";
        //echo $sql;
        $this->query($sql);
    }

}
