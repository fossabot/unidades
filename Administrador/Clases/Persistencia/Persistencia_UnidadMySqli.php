<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_MySqli.php");

class Persistencia_Unidadmysqli extends Persistencia_mysqli {

    //Guarda el paseo que llega por parámetro en la tabla paseo.
    public function guardar($unidad) {
        $nombre = $unidad->getNombre();
        $localidad = $unidad->getLocalidad();
        $qu = "INSERT INTO unidad(Nombre, Localidad) VALUES('" . $nombre . "','" . $localidad . "')";
        $this->query($qu);
    }

    //Seleccionamos los datos de la unidad.
    public function unidades() {
        $this->query("SELECT idUnidad, Nombre FROM unidad");
        return $this->result;
    }

    //Seleccionamos una unidad por el Id enviado por parametro.
    public function unidadxid($id) {
        $this->query("SELECT idUnidad, Nombre FROM unidad WHERE idUnidad=" . $id . "");
        return $this->result;
    }

}
