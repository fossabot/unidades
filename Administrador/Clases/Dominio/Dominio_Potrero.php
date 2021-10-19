<?php

class Dominio_Potrero {

    private $id;
    private $superficie;
    private $coordenaras;
    private $estado;
    private $unidad;
    private $fechaCre;
    private $nombre;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nom) {
        $this->nombre = $nom;
    }

    public function getSuperficie() {
        return $this->superficie;
    }

    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
    }

    public function getCoordenaras() {
        return $this->coordenaras;
    }

    public function setCoordenaras($coordenaras) {
        $this->coordenaras = $coordenaras;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getUnidad() {
        return $this->unidad;
    }

    public function setUnidad($unidad) {
        $this->unidad = $unidad;
    }

    public function getFechaCre() {
        return $this->fechaCre;
    }

    public function setFechaCre($fechaCre) {
        $this->fechaCre = $fechaCre;
    }

}
