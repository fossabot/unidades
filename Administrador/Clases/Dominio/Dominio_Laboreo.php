<?php

class Dominio_Laboreo {

    private $idLaboreo;
    private $Maquinista;
    private $Fecha;
    private $Equipo;

    public function getEquipo() {
        return $this->Equipo;
    }

    public function setEquipo($Equipo) {
        $this->Equipo = $Equipo;
    }

    public function getIdLaboreo() {
        return $this->idLaboreo;
    }

    public function setIdLaboreo($idLaboreo) {
        $this->idLaboreo = $idLaboreo;
    }

    public function getMaquinista() {
        return $this->Maquinista;
    }

    public function setMaquinista($Maquinista) {
        $this->Maquinista = $Maquinista;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

}

?>
