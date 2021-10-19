<?php

class Dominio_Usuario {

    private $idUsuario;
    private $Cedula;
    private $Usuario;
    private $Contrasena;
    private $Nombre;
    private $Apellido;
    private $Localidad;
    private $TipoUsuario;
    private $Activo;
    private $Departamento;

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getCedula() {
        return $this->Cedula;
    }

    public function setCedula($Cedula) {
        $this->Cedula = $Cedula;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    public function getContrasena() {
        return $this->Contrasena;
    }

    public function setContrasena($Contrasena) {
        $this->Contrasena = $Contrasena;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getApellido() {
        return $this->Apellido;
    }

    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    public function getLocalidad() {
        return $this->Localidad;
    }

    public function setLocalidad($Localidad) {
        $this->Localidad = $Localidad;
    }

    public function getTipoUsuario() {
        return $this->TipoUsuario;
    }

    public function setTipoUsuario($TipoUsuario) {
        $this->TipoUsuario = $TipoUsuario;
    }

    public function getActivo() {
        return $this->Activo;
    }

    public function setActivo($Activo) {
        $this->Activo = $Activo;
    }

    public function getDepartamento() {
        return $this->Departamento;
    }

    public function setDepartamento($Departamento) {
        $this->Departamento = $Departamento;
    }

}
