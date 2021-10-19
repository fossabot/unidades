<?php

class Dominio_Aplicacion {

    private $Tipodeaplicacion;
    private $Fecha;
    private $Hora;
    private $Metodo;
    private $Maquina;
    private $Maquinista;
    private $Productocomercial;
    private $Dosis;
    private $Unidad;
    private $Estadodelcultivo;
    private $Observaciones;

    public function getTipodeaplicacion() {
        return $this->Tipodeaplicacion;
    }

    public function setTipodeaplicacion($Tipodeaplicacion) {
        $this->Tipodeaplicacion = $Tipodeaplicacion;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    public function getHora() {
        return $this->Hora;
    }

    public function setHora($Hora) {
        $this->Hora = $Hora;
    }

    public function getMetodo() {
        return $this->Metodo;
    }

    public function setMetodo($Metodo) {
        $this->Metodo = $Metodo;
    }

    public function getMaquina() {
        return $this->Maquina;
    }

    public function setMaquina($Maquina) {
        $this->Maquina = $Maquina;
    }

    public function getMaquinista() {
        return $this->Maquinista;
    }

    public function setMaquinista($Maquinista) {
        $this->Maquinista = $Maquinista;
    }

    public function getProductocomercial() {
        return $this->Productocomercial;
    }

    public function setProductocomercial($Productocomercial) {
        $this->Productocomercial = $Productocomercial;
    }

    public function getDosis() {
        return $this->Dosis;
    }

    public function setDosis($Dosis) {
        $this->Dosis = $Dosis;
    }

    public function getUnidad() {
        return $this->Unidad;
    }

    public function setUnidad($Unidad) {
        $this->Unidad = $Unidad;
    }

    public function getEstadodelcultivo() {
        return $this->Estadodelcultivo;
    }

    public function setEstadodelcultivo($Estadodelcultivo) {
        $this->Estadodelcultivo = $Estadodelcultivo;
    }

    public function getObservaciones() {
        return $this->Observaciones;
    }

    public function setObservaciones($Observaciones) {
        $this->Observaciones = $Observaciones;
    }

}

?>
