<?php

class Dominio_Reserva {

    private $idReserva;
    private $Tipo;
    private $FechadeCorte;
    private $HoraCorte;
    private $MaquinaCorte;
    private $Maquinista;
    private $ObservacionesCorte;
    private $FechaMovimiento1;
    private $HoraMov1;
    private $MaquinaMov1;
    private $MaquinistaMov1;
    private $ObservacionesMov1;
    private $FechaMovimiento2;
    private $HoraMov2;
    private $MaquinaMov2;
    private $MaquinistaMov2;
    private $ObservacionesMov2;
    private $FechaReserva;
    private $MaquinaReserva;
    private $NumeroReserva;
    private $UnidadReserva;
    private $PesoEstimadoUnidad;
    private $RendimientoEstimado;
    private $VisualCompB1;
    private $VisualCompB2;
    private $VisualCompB3;
    private $VisualCompB4;
    private $VisualCompB5;
    private $VisualCompB6;
    private $VisualCompB7;
    private $VisualCompB8;
    private $VisualCompB9;
    private $VisualCompB10;

    public function getIdReserva() {
        return $this->idReserva;
    }

    public function setIdReserva($idReserva) {
        $this->idReserva = $idReserva;
    }

    public function getTipo() {
        return $this->Tipo;
    }

    public function setTipo($Tipo) {
        $this->Tipo = $Tipo;
    }

    public function getFechadeCorte() {
        return $this->FechadeCorte;
    }

    public function setFechadeCorte($FechadeCorte) {
        $this->FechadeCorte = $FechadeCorte;
    }

    public function getHoraCorte() {
        return $this->HoraCorte;
    }

    public function setHoraCorte($HoraCorte) {
        $this->HoraCorte = $HoraCorte;
    }

    public function getMaquinaCorte() {
        return $this->MaquinaCorte;
    }

    public function setMaquinaCorte($MaquinaCorte) {
        $this->MaquinaCorte = $MaquinaCorte;
    }

    public function getMaquinista() {
        return $this->Maquinista;
    }

    public function setMaquinista($Maquinista) {
        $this->Maquinista = $Maquinista;
    }

    public function getObservacionesCorte() {
        return $this->ObservacionesCorte;
    }

    public function setObservacionesCorte($ObservacionesCorte) {
        $this->ObservacionesCorte = $ObservacionesCorte;
    }

    public function getFechaMovimiento1() {
        return $this->FechaMovimiento1;
    }

    public function setFechaMovimiento1($FechaMovimiento1) {
        $this->FechaMovimiento1 = $FechaMovimiento1;
    }

    public function getHoraMov1() {
        return $this->HoraMov1;
    }

    public function setHoraMov1($HoraMov1) {
        $this->HoraMov1 = $HoraMov1;
    }

    public function getMaquinaMov1() {
        return $this->MaquinaMov1;
    }

    public function setMaquinaMov1($MaquinaMov1) {
        $this->MaquinaMov1 = $MaquinaMov1;
    }

    public function getMaquinistaMov1() {
        return $this->MaquinistaMov1;
    }

    public function setMaquinistaMov1($MaquinistaMov1) {
        $this->MaquinistaMov1 = $MaquinistaMov1;
    }

    public function getObservacionesMov1() {
        return $this->ObservacionesMov1;
    }

    public function setObservacionesMov1($ObservacionesMov1) {
        $this->ObservacionesMov1 = $ObservacionesMov1;
    }

    public function getFechaMovimiento2() {
        return $this->FechaMovimiento2;
    }

    public function setFechaMovimiento2($FechaMovimiento2) {
        $this->FechaMovimiento2 = $FechaMovimiento2;
    }

    public function getHoraMov2() {
        return $this->HoraMov2;
    }

    public function setHoraMov2($HoraMov2) {
        $this->HoraMov2 = $HoraMov2;
    }

    public function getMaquinaMov2() {
        return $this->MaquinaMov2;
    }

    public function setMaquinaMov2($MaquinaMov2) {
        $this->MaquinaMov2 = $MaquinaMov2;
    }

    public function getMaquinistaMov2() {
        return $this->MaquinistaMov2;
    }

    public function setMaquinistaMov2($MaquinistaMov2) {
        $this->MaquinistaMov2 = $MaquinistaMov2;
    }

    public function getObservacionesMov2() {
        return $this->ObservacionesMov2;
    }

    public function setObservacionesMov2($ObservacionesMov2) {
        $this->ObservacionesMov2 = $ObservacionesMov2;
    }

    public function getFechaReserva() {
        return $this->FechaReserva;
    }

    public function setFechaReserva($FechaReserva) {
        $this->FechaReserva = $FechaReserva;
    }

    public function getMaquinaReserva() {
        return $this->MaquinaReserva;
    }

    public function setMaquinaReserva($MaquinaReserva) {
        $this->MaquinaReserva = $MaquinaReserva;
    }

    public function getNumeroReserva() {
        return $this->NumeroReserva;
    }

    public function setNumeroReserva($NumeroReserva) {
        $this->NumeroReserva = $NumeroReserva;
    }

    public function getUnidadReserva() {
        return $this->UnidadReserva;
    }

    public function setUnidadReserva($UnidadReserva) {
        $this->UnidadReserva = $UnidadReserva;
    }

    public function getPesoEstimadoUnidad() {
        return $this->PesoEstimadoUnidad;
    }

    public function setPesoEstimadoUnidad($PesoEstimadoUnidad) {
        $this->PesoEstimadoUnidad = $PesoEstimadoUnidad;
    }

    public function getRendimientoEstimado() {
        return $this->RendimientoEstimado;
    }

    public function setRendimientoEstimado($RendimientoEstimado) {
        $this->RendimientoEstimado = $RendimientoEstimado;
    }

    public function getVisualCompB1() {
        return $this->VisualCompB1;
    }

    public function setVisualCompB1($VisualCompB1) {
        $this->VisualCompB1 = $VisualCompB1;
    }

    public function getVisualCompB2() {
        return $this->VisualCompB2;
    }

    public function setVisualCompB2($VisualCompB2) {
        $this->VisualCompB2 = $VisualCompB2;
    }

    public function getVisualCompB3() {
        return $this->VisualCompB3;
    }

    public function setVisualCompB3($VisualCompB3) {
        $this->VisualCompB3 = $VisualCompB3;
    }

    public function getVisualCompB4() {
        return $this->VisualCompB4;
    }

    public function setVisualCompB4($VisualCompB4) {
        $this->VisualCompB4 = $VisualCompB4;
    }

    public function getVisualCompB5() {
        return $this->VisualCompB5;
    }

    public function setVisualCompB5($VisualCompB5) {
        $this->VisualCompB5 = $VisualCompB5;
    }

    public function getVisualCompB6() {
        return $this->VisualCompB6;
    }

    public function setVisualCompB6($VisualCompB6) {
        $this->VisualCompB6 = $VisualCompB6;
    }

    public function getVisualCompB7() {
        return $this->VisualCompB7;
    }

    public function setVisualCompB7($VisualCompB7) {
        $this->VisualCompB7 = $VisualCompB7;
    }

    public function getVisualCompB8() {
        return $this->VisualCompB8;
    }

    public function setVisualCompB8($VisualCompB8) {
        $this->VisualCompB8 = $VisualCompB8;
    }

    public function getVisualCompB9() {
        return $this->VisualCompB9;
    }

    public function setVisualCompB9($VisualCompB9) {
        $this->VisualCompB9 = $VisualCompB9;
    }

    public function getVisualCompB10() {
        return $this->VisualCompB10;
    }

    public function setVisualCompB10($VisualCompB10) {
        $this->VisualCompB10 = $VisualCompB10;
    }

}

?>
