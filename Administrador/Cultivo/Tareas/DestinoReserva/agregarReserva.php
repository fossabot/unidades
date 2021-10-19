<?php
require_once("../../../Clases/Dominio/Dominio_Reserva.php");
require_once("../../../Clases/Persistencia/Persistencia_Reservamysqli.php");

$reserva = new Dominio_Reserva();
$cultivo = $_GET['txtCultivo'];

$reserva->setTipo($_GET['txtTipo']);
$reserva->setFechadeCorte($_GET['txtFechadeCorte']);
$reserva->setHoraCorte($_GET['txtHoraCorte']);
$reserva->setMaquinaCorte($_GET['txtMaquinaCorte']);
$reserva->setMaquinista($_GET['txtMaquinista']);
$reserva->setObservacionesCorte($_GET['txtObservacionesCorte']);
$reserva->setFechaMovimiento1($_GET['txtFechaMovimiento1']);
$reserva->setHoraMov1($_GET['txtHoraMov1']);
$reserva->setMaquinaMov1($_GET['txtMaquinaMov1']);
$reserva->setMaquinistaMov1($_GET['txtMaquinistaMov1']);
$reserva->setObservacionesMov1($_GET['txtObservacionesMov1']);
$reserva->setFechaMovimiento2($_GET['txtFechaMovimiento2']);
$reserva->setHoraMov2($_GET['txtHoraMov2']);
$reserva->setMaquinaMov2($_GET['txtMaquinaMov2']);
$reserva->setMaquinistaMov2($_GET['txtMaquinistaMov2']);
$reserva->setObservacionesMov2($_GET['txtObservacionesMov2']);
$reserva->setFechaReserva($_GET['txtFechaReserva']);
$reserva->setMaquinaReserva($_GET['txtMaquinaReserva']);
$reserva->setNumeroReserva($_GET['txtNumeroReserva']);
$reserva->setUnidadReserva($_GET['txtUnidadReserva']);
$reserva->setPesoEstimadoUnidad($_GET['txtPesoEstimadoUnidad']);
$reserva->setRendimientoEstimado($_GET['txtRendimientoEstimado']);
$reserva->setVisualCompB1($_GET['txtVisualCompB1']);
$reserva->setVisualCompB2($_GET['txtVisualCompB2']);
$reserva->setVisualCompB3($_GET['txtVisualCompB3']);
$reserva->setVisualCompB4($_GET['txtVisualCompB4']);
$reserva->setVisualCompB5($_GET['txtVisualCompB5']);
$reserva->setVisualCompB6($_GET['txtVisualCompB6']);
$reserva->setVisualCompB7($_GET['txtVisualCompB7']);
$reserva->setVisualCompB8($_GET['txtVisualCompB8']);
$reserva->setVisualCompB9($_GET['txtVisualCompB9']);
$reserva->setVisualCompB10($_GET['txtVisualCompB10']);


$perReserva = new Persistencia_Reservamysqli();
$perReserva->guardar($cultivo, $reserva);
?>
<html>
    <head>

    </head>
    <body>

        <div class="textosMsj" align="center"><?php echo "Chacra con Destno a Reserva Ingresada con Exito"; ?></div>

    </body>
</html>