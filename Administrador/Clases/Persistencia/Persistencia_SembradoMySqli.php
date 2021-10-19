<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_mysqli.php");

class Persistencia_Sembradomysqli extends Persistencia_mysqli {

//Retorna verdadero si ya se ha ingresado información sobra la siembra en este cultivo.
    public function existe($idC) {
        $this->query("SELECT idTarea
					  FROM tarea 
					  WHERE NombreCat='Sembrado' and idCultivo=" . $idC);
        while ($ee = $this->show_query()) {
            return true;
        }
        return false;
    }

    //Guarda la siembra y una nueva tarea que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo, $sembrado) {
        //Obtenemos ID y NOMBRE de Usuario creador.
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];

        //Obtenemos Fecha y Hora Actual:
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];

        //Creamos la informacion a mostrar de la tarea:
        $info = "Datos de Siembra:  </br>				
Especie	:" . $sembrado->getEspecie() . "</br>
Cultivar	:" . $sembrado->getCultivar() . "</br>
Nombreexperimentaldelcultivar	:" . $sembrado->getNombreexperimentaldelcultivar() . "</br>
Densidaddesiembra	:" . $sembrado->getDensidaddesiembra() . "</br>
Lote	:" . $sembrado->getLote() . "</br>
Germ	:" . $sembrado->getGerm() . "</br>
Pureza	:" . $sembrado->getPureza() . "</br>
Peso1000	:" . $sembrado->getPeso1000() . "</br>
Densidadkg&ha	:" . $sembrado->getDensidadkgha() . "</br>
FechaCurasem	:" . $sembrado->getFechaCurasem() . "</br>
Curasemilla1	:" . $sembrado->getCurasemilla1() . "</br>
DosisCurSem1	:" . $sembrado->getDosisCurSem1() . "</br>
Curasemilla2	:" . $sembrado->getCurasemilla2() . "</br>
DosisCurSem2	:" . $sembrado->getDosisCurSem2() . "</br>
FechaInoc	:" . $sembrado->getFechaInoc() . "</br>
Inoculante	:" . $sembrado->getInoculante() . "</br>
DosisInoc	:" . $sembrado->getDosisInoc() . "</br>
AdherenteInoc	:" . $sembrado->getAdherenteInoc() . "</br>
Dosis	:" . $sembrado->getDosis() . " </br> Registrado Por: " . $Nombre;


        //Guardamos la tarea referenciada a un Cultivo
        $this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt . "', 'Sembrado', '" . $info . "', '" . $cultivo . "', '" . $idUsuario . "', '" . $HoraTxt . "')");

        //Obtenemos el id de la tarea ingresada.
        $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);

        //Guardamos la Información de de lo sembrado referenciada a la tarea anterior.			
        $sql = "INSERT INTO	sembrado (Especie, Pureza, Curasemilla2, Cultivar, Peso1000, DosisCurSem2,		Nombreexperimentaldelcultivar, Densidadkgha, FechaInoc, Densidaddesiembra,FechaCurasem,Inoculante, Lote, Curasemilla1,	DosisInoc,	Germ, DosisCurSem1, AdherenteInoc,  Dosis, idTarea) VALUES ('" . $sembrado->getEspecie() . "', '" . $sembrado->getPureza() . "', '" . $sembrado->getCurasemilla2() . "', '" . $sembrado->getCultivar() . "', '" . $sembrado->getPeso1000() . "', '" . $sembrado->getDosisCurSem2() . "', '" . $sembrado->getNombreexperimentaldelcultivar() . "', '" . $sembrado->getDensidadkgha() . "', '" . $sembrado->getFechaInoc() . "', '" . $sembrado->getDensidaddesiembra() . "', '" . $sembrado->getFechaCurasem() . "', '" . $sembrado->getInoculante() . "', '" . $sembrado->getLote() . "', '" . $sembrado->getCurasemilla1() . "', '" . $sembrado->getDosisInoc() . "', '" . $sembrado->getGerm() . "', '" . $sembrado->getDosisCurSem1() . "', '" . $sembrado->getAdherenteInoc() . "', '" . $sembrado->getDosis() . "', '" . $ci['idTarea'] . "')";
        //echo ($sql);
        $this->query($sql);
    }

}

?>
