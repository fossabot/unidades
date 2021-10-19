<?php

class Dominio_Pastoreo {

    private $AnoVida;
    private $Numerodepastoreo;
    private $FechaInicio;
    private $FechaFin;
    private $Categoria;
    private $NumAnimales;
    private $MetodoPastoreo;

    public function getAnoVida() {
        return $this->AñoVida;
    }

    public function setAnoVida($AñoVida) {
        $this->AñoVida = $AñoVida;
    }

    public function getNumerodepastoreo() {
        return $this->Númerodepastoreo;
    }

    public function setNumerodepastoreo($Númerodepastoreo) {
        $this->Númerodepastoreo = $Númerodepastoreo;
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

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

    public function getNumAnimales() {
        return $this->NumAnimales;
    }

    public function setNumAnimales($NumAnimales) {
        $this->NumAnimales = $NumAnimales;
    }

    public function getMetodoPastoreo() {
        return $this->MetodoPastoreo;
    }

    public function setMetodoPastoreo($MetodoPastoreo) {
        $this->MetodoPastoreo = $MetodoPastoreo;
    }

}

?>
