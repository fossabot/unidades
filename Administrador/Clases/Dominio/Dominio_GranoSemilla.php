<?php

class Dominio_GranoSemilla {

    private $idGS;
    private $NroCosecha;
    private $Metodo;
    private $FechaCorte;

    public function getIdGS() {
        return $this->idGS;
    }

    public function setIdGS($idGS) {
        $this->idGS = $idGS;
    }

    public function getNroCosecha() {
        return $this->NroCosecha;
    }

    public function setNroCosecha($NroCosecha) {
        $this->NroCosecha = $NroCosecha;
    }

    public function getMetodo() {
        return $this->Metodo;
    }

    public function setMetodo($Metodo) {
        $this->Metodo = $Metodo;
    }

    public function getFechaCorte() {
        return $this->FechaCorte;
    }

    public function setFechaCorte($FechaCorte) {
        $this->FechaCorte = $FechaCorte;
    }

}

?>
