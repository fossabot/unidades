<?php

class Dominio_Riego {

    private $idRiego;
    private $Fecha;
    private $AreaRegada;
    private $Metodo;
    private $Volumen;
    private $Criterioderiego;
    private $Equipoderiego;
    private $Fuentedeagua;

    public function getEquipoderiego() {
        return $this->Equipoderiego;
    }

    public function setEquipoderiego($Equipoderiego) {
        $this->Equipoderiego = $Equipoderiego;
    }

    public function getFuentedeagua() {
        return $this->Fuentedeagua;
    }

    public function setFuentedeagua($Fuentedeagua) {
        $this->Fuentedeagua = $Fuentedeagua;
    }

    public function getCriterioderiego() {
        return $this->Criterioderiego;
    }

    public function setCriterioderiego($Criterioderiego) {
        $this->Criterioderiego = $Criterioderiego;
    }

    public function getIdRiego() {
        return $this->idRiego;
    }

    public function setIdRiego($idRiego) {
        $this->idRiego = $idRiego;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    public function getAreaRegada() {
        return $this->AreaRegada;
    }

    public function setAreaRegada($AreaRegada) {
        $this->AreaRegada = $AreaRegada;
    }

    public function getMetodo() {
        return $this->Metodo;
    }

    public function setMetodo($Metodo) {
        $this->Metodo = $Metodo;
    }

    public function getVolumen() {
        return $this->Volumen;
    }

    public function setVolumen($Volumen) {
        $this->Volumen = $Volumen;
    }

}

?>
