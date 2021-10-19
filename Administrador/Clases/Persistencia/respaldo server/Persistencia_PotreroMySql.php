<?php

date_default_timezone_set("America/Montevideo");
require_once("../Clases/Dominio/Dominio_Potrero.php");
require_once("Persistencia_mysqlii.php");

class Persistencia_Potreromysqlii extends Persistencia_mysqlii {

    //Guarda el paseo que llega por parámetro en la tabla paseo.
    public function guardar($potrero, $unidad) {
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
        $Potrero = new Dominio_Potrero();
        $Potrero = $potrero;
        $Coordenadas = $Potrero->getCoordenaras();
        $Superf = $Potrero->getSuperficie();
        $est = $Potrero->getEstado();
        $nom = $Potrero->getNombre();
        $qu = "INSERT INTO potrero(Nombre,Coordenadas, fechaCreacion, Superficie, Estado, idUnidad) VALUES('" . $nom . "','" . $Coordenadas . "','" . $FechaTxt . "','" . $Superf . "','" . $est . "'," . $unidad . ")";
        $this->query($qu);
    }

    //Informacion de los potreros de la unidad enviada por parametro.
    public function potrerosTododeUni($unidad) {
        $csql = "SELECT p.idPotrero, p.Nombre, c.CodigoClave, c.idCultivo, c.Anosiembra, c.TipoPasturaCultivo
					 FROM potrero p
					 INNER JOIN cultivo c ON c.idPotrero = p.idPotrero
					 WHERE p.idUnidad='" . $unidad . "'";
        $this->query($csql);
        return $this->result;
    }

    //Potreros con cultivos de la Unidad  enviada por parametro.
    public function potrerosCCdU($unidad) {
        $csql = "SELECT p.idPotrero, p.Nombre, c.CodigoClave, c.idCultivo
					 FROM potrero p
					 INNER JOIN cultivo c ON c.idPotrero = p.idPotrero
					 WHERE p.idUnidad='" . $unidad . "'";
        $this->query($csql);
        return $this->result;
    }

    //Potreros de la Unidad enviada por parametro		
    public function potreros($uni) {
        $unidad = $uni;
        $this->query("SELECT idPotrero, Coordenadas, Nombre, Estado
						  FROM potrero 
						  WHERE idUnidad=" . $unidad . " 
						  AND (Estado='SinCultivo' 
						  OR Estado='ConCultivo')");
        return $this->result;
    }

    //Potreros creados entre las fechas enviadas por parametros y pertenecientes a la unidad enviada.
    public function potrerosxFecha($fecha1, $fecha2, $uni) {
        $unidad = $uni;
        $Fecha1 = $fecha1;
        $Fecha2 = $fecha2;
        $sql = "SELECT idPotrero, Coordenadas, Nombre, Estado 
				   FROM potrero  
				   WHERE idUnidad ='" . $unidad . "' 
				   AND idPotrero IN(SELECT idPotrero 
				   				    FROM cultivo  
								    WHERE FechaInicio 
									BETWEEN '" . $Fecha1 . "' AND '" . $Fecha2 . "')";
        $this->query($sql);
        return $this->result;
    }

    //Datos de potreros de la unidad.
    public function potrerosTodo($uni) {
        $unidad = $uni;
        $this->query("SELECT idPotrero, Coordenadas, Superficie, Nombre, Estado, fechaCreacion, idUnidad
						  FROM potrero 
						  WHERE idUnidad=" . $unidad . " AND Estado!='Inactivo'");
        return $this->result;
    }

    public function potrerosCExp($uni) {
        $unidad = $uni;
        $this->query("SELECT p.idPotrero, p.Coordenadas, p.Superficie, p.Nombre, p.fechaCreacion
						  FROM potrero p
						  INNER JOIN experimento e ON e.Potrero = p.idPotrero
						  WHERE p.idUnidad=" . $unidad . " 
						  AND p.Estado!='Inactivo'");
        return $this->result;
    }

    //Potrero segun id enviado por parametro.
    public function potrerosxidP($idP) {
        $this->query("SELECT Coordenadas
						  FROM potrero 
						  WHERE idPotrero=" . $idP . "");
        return $this->result;
    }

    public function potreroxidP($idP) {
        $this->query("SELECT Nombre, Superficie, fechaCreacion
						  FROM potrero 
						  WHERE idPotrero=" . $idP . "");
        return $this->result;
    }

    //Potreros Sin Cultivos.
    public function potrerosSC($uni) {
        $unidad = $uni;
        $this->query("SELECT idPotrero, Coordenadas, Nombre, Estado
						  FROM potrero 
						  WHERE idUnidad=" . $unidad . " 
						  AND Estado= 'SinCultivo'");
        return $this->result;
    }

    //Potreros con Cultivos.
    public function potrerosCC($uni) {
        $unidad = $uni;
        $this->query("SELECT idPotrero, Coordenadas, Nombre, Estado
						  FROM potrero 
						  WHERE idUnidad=" . $unidad . " 
						  AND Estado= 'ConCultivo'");
        return $this->result;
    }

    //Potreros de la unidad 
    public function potrerosUniSP($uni, $pot) {
        $unidad = $uni;
        $this->query("SELECT Coordenadas
						  FROM potrero 
						  WHERE idUnidad=" . $unidad . " 
						  AND Estado= 'SinCultivo'
						  AND idPotrero!=" . $pot . " 
						  OR Estado='ConCultivo'");
        return $this->result;
    }

    //Potreros por id de unidad
    public function potrerosxid($idu) {
        $id = $idu;
        $this->query("SELECT Nombre, Superficie, Estado
						  FROM potrero WHERE idPotrero=" . $id . "");
        return $this->result;
    }

    public function editarPotrero($p, $cord, $sup) {
        $this->query("UPDATE potrero
						 SET Coordenadas = '" . $cord . "', Superficie=" . $sup . "
						 where idPotrero=" . $p . "");
    }

    //Inhabilitar potrero en el sistema
    public function desactPotrero($idPot) {
        $SQL = "UPDATE potrero 
			   SET Estado = 'Inactivo'
			   WHERE idPotrero =" . $idPot . "";

        $this->query($SQL);
    }

}

?>
