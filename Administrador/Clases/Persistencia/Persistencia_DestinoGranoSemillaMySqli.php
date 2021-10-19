<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_mysqli.php");

class Persistencia_DestinoGranoSemillamysqli extends Persistencia_mysqli {

    //Guarda el obgeto destinogranosemilla y una nueva tarea en la tabla "tarea".
    public function guardar($cultivo, $destinogs, $cb) {
        //Obtenemos ID y NOMBRE de Usuario creador.
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];
        //Obtenemos Fecha y Hora Actual:
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
        //Creamos la informacion a mostrar de la tarea:
        $info = "Datos de Chacra con Destino  Grano-Semilla:  </br>
            Componente botanico=" . $cb . "</br>
NumCosecha	:      " . $destinogs->getNumCosecha() . "</br>
Metodo	:      " . $destinogs->getMetodo() . "</br>
FechaCorte	:      " . $destinogs->getFechaCorte() . "</br>
HoraCorte	:      " . $destinogs->getHoraCorte() . "</br>
MaquinaCorte	:      " . $destinogs->getMaquinaCorte() . "</br>
MaquinistaCorte	:      " . $destinogs->getMaquinistaCorte() . "</br>
ObservacionCorte	:      " . $destinogs->getObservacionCorte() . "</br>
FechaMovimiento	:      " . $destinogs->getFechaMovimiento() . "</br>
HoraMovimiento	:      " . $destinogs->getHoraMovimiento() . "</br>
MaquinaMovi	:      " . $destinogs->getMaquinaMovi() . "</br>
MaquinistaMovi	:      " . $destinogs->getMaquinistaMovi() . "</br>
ObservacionMov	:      " . $destinogs->getObservacionMov() . "</br>
FechaCosecha	:" . $destinogs->getFechaCosecha() . "</br>
Maquina	:" . $destinogs->getMaquina() . "</br>
Maquinista	:" . $destinogs->getMaquinista() . "</br>
RendimientoSucio	:" . $destinogs->getRendimientoSucio() . "</br>
RendimientoLimpio	:" . $destinogs->getRendimientoLimpio() . "</br>

Registrado Por:        " . $Nombre . " " . $FechaTxt . "";

        //Guardamos la tarea referenciada a un Cultivo
        $this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt . "', 'Destino GS', '" . $info . "', '" . $cultivo . "', '" . $idUsuario . "', '" . $HoraTxt . "')");

        //Obtenemos el id de la tarea ingresada.
        $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);

        //Guardamos la Información de destinogranosemilla referenciada a la tarea anterior.			
        $sql = "INSERT INTO	destinogranosemilla (NumCosecha	,ObservacionCorte,FechaCosecha	,	Metodo	,	FechaMovimiento	,	Maquina	,FechaCorte	,HoraMovimiento	,	Maquinista	,HoraCorte	,	MaquinaMovi	,	RendimientoSucio,	MaquinaCorte	,	MaquinistaMovi	,	RendimientoLimpio,	MaquinistaCorte, idTarea, compbotanico)	VALUES ('"
                . $destinogs->getNumCosecha() . "', '" . $destinogs->getObservacionCorte() . "', '" .
                "', '" . $destinogs->getFechaCosecha() .
                $destinogs->getMetodo() .
                "', '" . $destinogs->getFechaMovimiento() .
                "', '" . $destinogs->getMaquina() .
                "', '" . $destinogs->getFechaCorte() .
                "', '" . $destinogs->getHoraMovimiento() .
                "', '" . $destinogs->getMaquinista() .
                "', '" . $destinogs->getHoraCorte() .
                "', '" . $destinogs->getMaquinaMovi() .
                "', '" . $destinogs->getRendimientoSucio() .
                "', '" . $destinogs->getMaquinaCorte() .
                "', '" . $destinogs->getMaquinistaMovi() .
                "', '" . $destinogs->getRendimientoLimpio() .
                "', '" . $destinogs->getMaquinistaCorte() .
                "', '" . $ci['idTarea'] .
                "', '" . $cb . "')";

        $this->query($sql);
    }

    public function cbotanicoporcultivo($idC) {
        $this->query("SELECT * FROM tarea t, siembra s WHERE t.idCultivo=" . $idC . " AND t.idTarea=s.idTarea");
        return $this->result;
    }

}
