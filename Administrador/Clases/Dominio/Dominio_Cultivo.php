<?php

class Dominio_Cultivo {

    private $idCultivo;
    private $CodigoClave;
    private $Nombre;
    private $TipoSuelo1;
    private $TipoSuelo2;
    private $TipoSuelo3;
    private $Anosiembra;
    private $TipoPasturaCultivo;
    private $Categoria;
    private $FechaInicio;
    private $FechaFin;
    private $Potrero;

    public function getIdCultivo() {
        return $this->idCultivo;
    }

    public function setIdCultivo($idCultivo) {
        $this->idCultivo = $idCultivo;
    }

    public function getCodigoClave() {
        return $this->CodigoClave;
    }

    public function setCodigoClave($CodigoClave) {
        $this->CodigoClave = $CodigoClave;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getTipoSuelo1() {
        return $this->TipoSuelo1;
    }

    public function setTipoSuelo1($TipoSuelo1) {
        $this->TipoSuelo1 = $TipoSuelo1;
    }

    public function getTipoSuelo2() {
        return $this->TipoSuelo2;
    }

    public function setTipoSuelo2($TipoSuelo2) {
        $this->TipoSuelo2 = $TipoSuelo2;
    }

    public function getTipoSuelo3() {
        return $this->TipoSuelo3;
    }

    public function setTipoSuelo3($TipoSuelo3) {
        $this->TipoSuelo3 = $TipoSuelo3;
    }

    public function getAnosiembra() {
        return $this->Anosiembra;
    }

    public function setAnosiembra($Anosiembra) {
        $this->Anosiembra = $Anosiembra;
    }

    public function getTipoPasturaCultivo() {
        return $this->TipoPasturaCultivo;
    }

    public function setTipoPasturaCultivo($TipoPasturaCultivo) {
        $this->TipoPasturaCultivo = $TipoPasturaCultivo;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

    public function getFechaInicio() {
        return $this->FechaInicio;
    }

    public function setFechaInicio($FechaInicio) {
        $this->FechaInicio = $FechaInicio;
    }

    public function getFechaFin() {
        return $this->FechaFin;
    }

    public function setFechaFin($FechaFin) {
        $this->FechaFin = $FechaFin;
    }

    public function getPotrero() {
        return $this->Potrero;
    }

    public function setPotrero($Potrero) {
        $this->Potrero = $Potrero;
    }

    function __construct() {
        
    }

}

?>
