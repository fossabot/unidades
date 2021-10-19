<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_mysqli.php");

class Persistencia_Laboreomysqli extends Persistencia_mysqli {

    //Guarda el laboreo y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo, $laboreo) {
        //Obtenemos ID y NOMBRE de Usuario creador.
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];

        //Obtenemos Fecha y Hora Actual:
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];

        //Creamos la informacion a mostrar de la tarea:
        $info = "Datos de Laboreo:  </br>				
Fecha	:      " . $laboreo->getFecha() . "</br>
Equipo	:      " . $laboreo->getEquipo() . "</br>
Maquinista	:      " . $laboreo->getMaquinista() . "</br>

Registrado Por:        " . $Nombre . " " . $FechaTxt . "";

        //Guardamos la tarea referenciada a un Cultivo
        $this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt . "', 'Laboreo', '" . $info . "', '" . $cultivo . "', '" . $idUsuario . "', '" . $HoraTxt . "')");

        //Obtenemos el id de la tarea ingresada.
        $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);

        //Guardamos la Información de laboreo referenciada a la tarea anterior.			
        $sql = "INSERT INTO	laboreo (Fecha, Equipo, Maquinista, idTarea)	VALUES ('" . $laboreo->getFecha() . "', '" . $laboreo->getEquipo() . "', '" . $laboreo->getMaquinista() . "', '" . $ci['idTarea'] . "')";

        $this->query($sql);
    }

}

?>
