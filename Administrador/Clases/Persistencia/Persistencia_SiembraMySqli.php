<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_mysqli.php");

class Persistencia_Siembramysqli extends Persistencia_mysqli {

    //Guarda la siembra y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo, $siembra) {
        //Obtenemos ID y NOMBRE de Usuario creador.
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];
        //Obtenemos Fecha y Hora Actual:
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];

        //Creamos la informacion a mostrar de la tarea:
        $info = "Datos de Siembra:  </br> Fecha de Siembra:" . $siembra->getFechadesiembra() . "</br> Metodo de siembra	:" . $siembra->getMetododesiembra() . "</br> Sembradora:" . $siembra->getSembradora() . "</br> Distancia entre surcos	:" . $siembra->getDistanciaentresurcos() . "</br> Sembrador:" . $siembra->getSembrador() . "</br> Fecha de emergencia	:" . $siembra->getFechadeemergencia() . "</br> Fecha FertilInicial	:" . $siembra->getFechaFertilInicial() . "</br> Fertilizante	:" . $siembra->getFertilizante() . "</br> Dosis Fertilizante	:" . $siembra->getDosisFert() . "</br> Unidad Fertertilizante	:" . $siembra->getUnidadFert() . "</br> Observaciones	:" . $siembra->getObservaciones() . "</br> NombreCompBot1	:" . $siembra->getNombreCompBot1() . "</br> NombreCompBot2	:" . $siembra->getNombreCompBot2() . "</br> NombreCompBot3	:" . $siembra->getNombreCompBot3() . "</br> NombreCompBot4	:" . $siembra->getNombreCompBot4() . "</br> NombreCompBot5	:" . $siembra->getNombreCompBot5() . "</br> NombreCompBot6	:" . $siembra->getNombreCompBot6() . "</br> NombreCompBot7	:" . $siembra->getNombreCompBot7() . "</br> NombreCompBot8	:" . $siembra->getNombreCompBot8() . "</br> NombreCompBot9	:" . $siembra->getNombreCompBot9() . "</br> NombreCompBot10 :" . $siembra->getNombreCompBot10() . " </br> Registrado Por: " . $Nombre;

        //Guardamos la tarea referenciada a un Cultivo
        $this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt . "', 'Siembra', '" . $info . "', '" . $cultivo . "', '" . $idUsuario . "', '" . $HoraTxt . "')");

        //Obtenemos el id de la tarea ingresada.
        $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);

        //Guardamos la Información de la siembra referenciada a la tarea anterior.			
        $sql = "INSERT INTO siembra (Fechadesiembra, Metododesiembra, Sembradora, Distanciaentresurcos, Sembrador, Fechadeemergencia, FechaFertilInicial, Fertilizante, DosisFert, UnidadFert, Observaciones, NombreCompBot1, NombreCompBot2, NombreCompBot3, NombreCompBot4, NombreCompBot5, NombreCompBot6, NombreCompBot7, NombreCompBot8, NombreCompBot9, NombreCompBot10, idTarea) VALUES ('" . $siembra->getFechadesiembra() . "', '" . $siembra->getMetododesiembra() . "', '" . $siembra->getSembradora() . "', '" . $siembra->getDistanciaentresurcos() . "', '" . $siembra->getSembrador() . "', '" . $siembra->getFechadeemergencia() . "', '" . $siembra->getFechaFertilInicial() . "', '" . $siembra->getFertilizante() . "', '" . $siembra->getDosisFert() . "', '" . $siembra->getUnidadFert() . "', '" . $siembra->getObservaciones() . "', '" . $siembra->getNombreCompBot1() . "', '" . $siembra->getNombreCompBot2() . "', '" . $siembra->getNombreCompBot3() . "', '" . $siembra->getNombreCompBot4() . "', '" . $siembra->getNombreCompBot5() . "', '" . $siembra->getNombreCompBot6() . "', '" . $siembra->getNombreCompBot7() . "', '" . $siembra->getNombreCompBot8() . "', '" . $siembra->getNombreCompBot9() . "', '" . $siembra->getNombreCompBot10() . "', '" . $ci['idTarea'] . "')";
        //echo $sql;
        $this->query($sql);
    }

    //Retorna verdadero si ya se ha ingresado información sobra la siembra en este cultivo.
    public function existe($idC) {
        $this->query("SELECT idTarea
					  FROM tarea 
					  WHERE NombreCat='Siembra' and idCultivo=" . $idC);
        while ($ee = $this->show_query()) {
            return true;
        }
        return false;
    }

}
