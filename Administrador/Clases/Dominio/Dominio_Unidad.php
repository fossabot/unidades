<?php

class Dominio_Unidad {

    private $idUnidad;
    private $Nombre;
    private $Localidad;

    public function getIdUnidad() {
        return $this->idUnidad;
    }

    public function setIdUnidad($idUnidad) {
        $this->idUnidad = $idUnidad;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getLocalidad() {
        return $this->Localidad;
    }

    public function setLocalidad($Localidad) {
        $this->Localidad = $Localidad;
    }

    function __construct($Nombre, $Localidad) {
        $this->Nombre = $Nombre;
        $this->Localidad = $Localidad;
    }

}

?>