<?php

class Dominio_Tarea {

    private $idTarea;
    private $Fecha;
    private $data;
    private $Categoria;

    public function getIdTarea() {
        return $this->idTarea;
    }

    public function setIdTarea($idTarea) {
        $this->idTarea = $idTarea;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

}

?>
