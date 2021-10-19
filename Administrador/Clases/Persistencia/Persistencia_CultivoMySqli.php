<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_MySqli.php");

class Persistencia_Cultivomysqli extends Persistencia_mysqli {

    //Guarda el cultivo que llega por par�metro en la tabla "cultivo".
    public function guardar($cultivo) {
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
        $horas = $Fecha["hours"];
        $horas = $horas - 3;
        $HoraTxt = $horas . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
        $sql = "INSERT INTO cultivo (CodigoClave, Nombre, TipoSuelo1,TipoSuelo2,TipoSuelo3,Anosiembra, TipoPasturaCultivo, Categoria, FechaInicio,  idPotrero) VALUES ('" . $cultivo->getCodigoClave() . "', '" . $cultivo->getNombre() . "', '" . $cultivo->getTipoSuelo1() . "', '" . $cultivo->getTipoSuelo2() . "', '" . $cultivo->getTipoSuelo3() . "', '" . $cultivo->getAnosiembra() . "', '" . $cultivo->getTipoPasturaCultivo() . "', '" . $cultivo->getCategoria() . "', '" . $cultivo->getFechaInicio() . "', '" . $cultivo->getPotrero() . "')";
        $this->query($sql);

        $this->query("UPDATE potrero SET Estado = 'ConCultivo' WHERE idPotrero=" . $cultivo->getPotrero());

        $this->query("SELECT idCultivo FROM `cultivo` ORDER BY `idCultivo` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);
        $this->query("INSERT INTO tarea(Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $cultivo->getFechaInicio() . "', 'Inicio Cultivo', 'Se Inicia el Cultivo con Codigo Clave " . $cultivo->getCodigoClave() . ". Usuario Creador: " . $Nombre . "', '" . $ci['idCultivo'] . "', '" . $idUsuario . "', '" . $HoraTxt . "')");
    }

    //Retorna verdadero si el Codigo Clave  que llega por par�metro ya existe en la tabla "cultivo".
    public function existe($cultivo) {
        $this->query("SELECT CodigoClave
					  FROM cultivo 
					  WHERE CodigoClave = '" . $cultivo->getCodigoClave() . "'");
        while ($ee = $this->show_query()) {
            return true;
        }
        return false;
    }

    public function cultivoxid($idp) {
        $id = $idp;
        $this->query("SELECT `idCultivo`,`CodigoClave`, `Nombre`, `TipoSuelo1`, `TipoSuelo2`, `TipoSuelo3`, `Anosiembra`, `TipoPasturaCultivo`, `Categoria`, `FechaInicio`, `FechaFin`, `idPotrero` FROM `cultivo` WHERE idCultivo=" . $id . "");
        return $this->result;
    }

    public function cultivoxiddePot($idp) {
        $id = $idp;
        $this->query("SELECT `idCultivo` FROM `cultivo` WHERE idPotrero=" . $id . " AND FechaFin=''");
        return $this->result;
    }

    public function cultivoUnidad($iUni) {
        $this->query("SELECT idCultivo,`CodigoClave`, `Nombre`, `TipoSuelo1`, `TipoSuelo2`, `TipoSuelo3`, `Anosiembra`, `TipoPasturaCultivo`, `Categoria`, `FechaInicio`, `FechaFin`, `idPotrero` FROM `cultivo` WHERE idPotrero IN (SELECT idPotrero FROM potrero WHERE idUnidad=" . $iUni . ")");
        return $this->result;
    }

    public function cultivosdePot($iUni, $pot) {
        $this->query("SELECT idCultivo,`CodigoClave`, `Nombre`, `TipoSuelo1`, `TipoSuelo2`, `TipoSuelo3`, `Anosiembra`, `TipoPasturaCultivo`, `Categoria`, `FechaInicio`, `FechaFin`, `idPotrero` FROM `cultivo` WHERE idPotrero IN (SELECT idPotrero FROM potrero WHERE idUnidad=" . $iUni . " AND idPotrero=" . $pot . ")");
        return $this->result;
    }

    public function cultivosPotrero($iUni, $pot) {
        $this->query("SELECT idCultivo,`CodigoClave`, `Nombre`, `TipoSuelo1`, `TipoSuelo2`, `TipoSuelo3`, `Anosiembra`, `TipoPasturaCultivo`, `Categoria`, `FechaInicio`, `FechaFin` FROM `cultivo` WHERE idPotrero IN (SELECT idPotrero FROM potrero WHERE idUnidad=" . $iUni . " AND idPotrero=" . $pot . ")");
        return $this->result;
    }

    //Guarda el cultivo que llega por par�metro en la tabla "cultivo".
    public function guardarCSP($cultivo, $Potrero) {
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];
        $idUnidad = $_SESSION['unidad'];

        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];


        $potrero = $Potrero;
        $Superf = $potrero->getSuperficie();
        $est = $potrero->getEstado();
        $nom = $potrero->getNombre();
        $cor = 12345678;

        $existe = $this->existePotrero($nom);
        $p = mysqli_fetch_array($existe);
        $idPotrero = $p['idPotrero'];

        if ($idPotrero == "") {
            $qu = "INSERT INTO potrero(Nombre, Coordenadas, fechaCreacion, Superficie, Estado, idUnidad) VALUES('" . $nom . "','" . $cor . "','" . $FechaTxt . "','" . $Superf . "','" . $est . "'," . $idUnidad . ")";

            $this->query($qu);

            $this->query("SELECT idPotrero FROM `potrero` ORDER BY `idPotrero` DESC LIMIT 1");
            $ci = mysqli_fetch_array($this->result);
            $idPotrero = $ci['idPotrero'];
        } else {
            $this->query("UPDATE potrero SET Estado = 'ConCultivo' WHERE idPotrero=" . $idPotrero . "");
        }

        $sql = "INSERT INTO cultivo (CodigoClave, Nombre, TipoSuelo1,TipoSuelo2, TipoSuelo3, Anosiembra, TipoPasturaCultivo, Categoria, FechaInicio,   idPotrero) VALUES ('" . $cultivo->getCodigoClave() . "', '" . $cultivo->getNombre() . "', '" . $cultivo->getTipoSuelo1() . "', '" . $cultivo->getTipoSuelo2() . "', '" . $cultivo->getTipoSuelo3() . "', '" . $cultivo->getAnosiembra() . "', '" . $cultivo->getTipoPasturaCultivo() . "', '" . $cultivo->getCategoria() . "', '" . $cultivo->getFechaInicio() . "', '" . $idPotrero . "')";

        $this->query($sql);

        $this->query("SELECT idCultivo FROM `cultivo` ORDER BY `idCultivo` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);

        $this->query("INSERT INTO tarea(Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $cultivo->getFechaInicio() . "', 'Inicio Cultivo', 'Se Inicia el Cultivo con Codigo Clave " . $cultivo->getCodigoClave() . ". Usuario Creador: " . $Nombre . "', '" . $ci['idCultivo'] . "', '" . $idUsuario . "', '" . $HoraTxt . "')");
    }

    public function existePotrero($nomP) {
        $this->query("SELECT idPotrero
					  FROM potrero
					  WHERE Nombre = '" . $nomP . "'");
        return $this->result;
    }

    public function cerrarCultivo($idCultivo, $idPotrero) {

        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];

        $SQL = "UPDATE cultivo 
			   SET FechaFin = '" . $FechaTxt . "'
			   WHERE idCultivo='" . $idCultivo . "'";

        $this->query($SQL);
        $SQL = "UPDATE potrero 
			   SET Estado = 'SinCultivo'
			   WHERE idPotrero='" . $idPotrero . "'";
        $this->query($SQL);
    }

    public function riegosxCul($idCu, $Fecha1, $Fecha2) {
        $cult = $idCu;
        $f1 = $Fecha1;
        $f2 = $Fecha2;
        $csql = "SELECT r.Volumen, r.Metodo, t.Fecha
				 FROM riego r
				 INNER JOIN tarea t ON t.idTarea = r.idTarea
				 WHERE t.idCultivo=" . $cult . " AND
				 t.Fecha
				 BETWEEN '" . $f1 . "' AND '" . $f2 . "'";
        $this->query($csql);
        return $this->result;
    }

    public function riegosxCulSuma($idCu, $Fecha1, $Fecha2) {
        $cult = $idCu;
        $f1 = $Fecha1;
        $f2 = $Fecha2;
        $csql = "SELECT SUMVolumen) AS Suma
				 FROM riego r
				 INNER JOIN tarea t ON t.idTarea = r.idTarea
				 WHERE t.idCultivo=" . $cult . " AND
				 t.Fecha
				 BETWEEN '" . $f1 . "' AND '" . $f2 . "'";
        $this->query($csql);
        return $this->result;
    }

    public function pastoreos($Año, $tipo, $idP) {
        $csql = "SELECT p.AnoVida, p.NroPastoreo, p.FechaInicio, p.FechaFin, p.Categoria, p.NroAnimales, p.Metodo, c.CodigoClave 
				 FROM pastoreo p
                 INNER JOIN tarea t ON p.idTarea = t.idTarea
                 INNER JOIN cultivo c ON t.idCultivo = c.idCultivo
  				 WHERE Anosiembra='" . $Año . "' AND
				 TipoPasturaCultivo='" . $tipo . "' AND
				 idPotrero=" . $idP . " 
				 ORDER BY c.CodigoClave";
        $this->query($csql);
        return $this->result;
    }

    public function modificar($cultivo) {
        $SQL = "UPDATE cultivo SET 
		Nombre	='" . $cultivo->getNombre() . "',
		TipoSuelo1	='" . $cultivo->getTipoSuelo1() . "',
		TipoSuelo2	='" . $cultivo->getTipoSuelo2() . "',
		TipoSuelo3	='" . $cultivo->getTipoSuelo3() . "',
		TipoPasturaCultivo	='" . $cultivo->getTipoPasturaCultivo() . "',
		Categoria	='" . $cultivo->getCategoria() . "',
		Anosiembra	='" . $cultivo->getAnosiembra() . "',
		FechaFin	='" . $cultivo->getFechaFin() . "',
		FechaInicio	='" . $cultivo->getFechaInicio() . "' 
		WHERE idCultivo='" . $cultivo->getIdCultivo() . "'";
        $this->query($SQL);
    }

    //Cultivos iniciados entre las fechas enviadas por parametros y pertenecientes a la unidad enviada.
    public function cultivosxFecha($fecha1, $fecha2, $uni) {
        $unidad = $uni;
        $Fecha1 = $fecha1;
        $Fecha2 = $fecha2;
        $this->query("SELECT idCultivo,`CodigoClave`, `Nombre`, `TipoSuelo1`, `TipoSuelo2`, `TipoSuelo3`, `Anosiembra`, `TipoPasturaCultivo`, `Categoria`, `FechaInicio`, `FechaFin`, `idPotrero` FROM `cultivo` 
						WHERE FechaInicio 	BETWEEN '" . $Fecha1 . "' AND '" . $Fecha2 . "
						AND WHERE idPotrero IN (SELECT idPotrero FROM potrero WHERE idUnidad=" . $iUni . ")");
        return $this->result;
    }

}

?>
