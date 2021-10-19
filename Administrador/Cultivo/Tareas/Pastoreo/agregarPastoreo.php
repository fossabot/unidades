<?php
date_default_timezone_set("America/Montevideo");
require_once("../../../Clases/Dominio/Dominio_Pastoreo.php");
require_once("../../../Clases/Dominio/Dominio_RendimientoForraje.php");
require_once("../../../Clases/Dominio/Dominio_ComposicionBotanica.php");
require_once("../../../Clases/Persistencia/Persistencia_Pastoreomysqli.php");

$cultivo = $_GET['txtCultivo'];

/* * *****************Creamos el Pastoreo***************** */

$pastoreo = new Dominio_Pastoreo();

$pastoreo->setAnoVida($_GET['txtAnoVida']);
$pastoreo->setNumerodepastoreo($_GET['txtNumerodepastoreo']);
$pastoreo->setFechaInicio($_GET['txtFechaInicio']);
$pastoreo->setFechaFin($_GET['txtFechaFin']);
$pastoreo->setCategoria($_GET['txtCategoria']);
$pastoreo->setNumAnimales($_GET['txtNumAnimales']);
$pastoreo->setMetodoPastoreo($_GET['txtMetodoPastoreo']);


/* * *****************Creamos Rendimiento del forraje************************** */

$rendForraje = new Dominio_ComposicionBotanica();

$rendForraje->setNumerodepastoreo($pastoreo->getNumerodepastoreo());
$rendForraje->setFechaMuestreo($_GET['txtFechaMuestreo']);
$rendForraje->setVisuCB1($_GET['txtVisuCB1']);
$rendForraje->setVisuCB2($_GET['txtVisuCB2']);
$rendForraje->setVisuCB3($_GET['txtVisuCB3']);
$rendForraje->setVisuCB4($_GET['txtVisuCB4']);
$rendForraje->setVisuCB5($_GET['txtVisuCB5']);
$rendForraje->setVisuCB6($_GET['txtVisuCB6']);
$rendForraje->setVisuCB7($_GET['txtVisuCB7']);
$rendForraje->setVisuCB8($_GET['txtVisuCB8']);
$rendForraje->setVisuCB9($_GET['txtVisuCB9']);
$rendForraje->setVisuCB10($_GET['txtVisuCB10']);
$rendForraje->setGraviPVCB1($_GET['txtGraviPVCB1']);
$rendForraje->setGraviPVCB2($_GET['txtGraviPVCB2']);
$rendForraje->setGraviPVCB3($_GET['txtGraviPVCB3']);
$rendForraje->setGraviPVCB4($_GET['txtGraviPVCB4']);
$rendForraje->setGraviPVCB5($_GET['txtGraviPVCB5']);
$rendForraje->setGraviPVCB6($_GET['txtGraviPVCB6']);
$rendForraje->setGraviPVCB7($_GET['txtGraviPVCB7']);
$rendForraje->setGraviPVCB8($_GET['txtGraviPVCB8']);
$rendForraje->setGraviPVCB9($_GET['txtGraviPVCB9']);
$rendForraje->setGraviPVCB10($_GET['txtGraviPVCB10']);
$rendForraje->setGraviPSCB1($_GET['txtGraviPSCB1']);
$rendForraje->setGraviPSCB2($_GET['txtGraviPSCB2']);
$rendForraje->setGraviPSCB3($_GET['txtGraviPSCB3']);
$rendForraje->setGraviPSCB4($_GET['txtGraviPSCB4']);
$rendForraje->setGraviPSCB5($_GET['txtGraviPSCB5']);
$rendForraje->setGraviPSCB6($_GET['txtGraviPSCB6']);
$rendForraje->setGraviPSCB7($_GET['txtGraviPSCB7']);
$rendForraje->setGraviPSCB8($_GET['txtGraviPSCB8']);
$rendForraje->setGraviPSCB9($_GET['txtGraviPSCB9']);
$rendForraje->setGraviPSCB10($_GET['txtGraviPSCB10']);

/* * ****************Creamos Comoposicion Botanica******************** */

$compbot = new Dominio_RendimientoForraje();

$compbot->setNumerodepastoreo($pastoreo->getNumerodepastoreo());
$compbot->setFechaMuestreo($_GET['txtFechaMuestreo']);
$compbot->setTipo($_GET['txtTipo']);
$compbot->setMetodo($_GET['txtMetodo']);
$compbot->setLargoArea($_GET['txtLargoArea']);
$compbot->setAnchoArea($_GET['txtAnchoArea']);
$compbot->setNumMuestras($_GET['txtNumMuestras']);
$compbot->setMS($_GET['txtMS']);
$compbot->setRendimientoPromedio($_GET['txtRendimientoPromedio']);
$compbot->setDesvio($_GET['txtDesvio']);
$compbot->setRendMuestra1($_GET['txtRendMuestra1']);
$compbot->setRendMuestra2($_GET['txtRendMuestra2']);
$compbot->setRendMuestra3($_GET['txtRendMuestra3']);
$compbot->setRendMuestra4($_GET['txtRendMuestra4']);
$compbot->setRendMuestra5($_GET['txtRendMuestra5']);
$compbot->setRendMuestra6($_GET['txtRendMuestra6']);
$compbot->setRendMuestra7($_GET['txtRendMuestra7']);
$compbot->setRendMuestra8($_GET['txtRendMuestra8']);
$compbot->setRendMuestra9($_GET['txtRendMuestra9']);
$compbot->setRendMuestra10($_GET['txtRendMuestra10']);
$compbot->setPVMuestra1($_GET['txtPVMuestra1']);
$compbot->setPVMuestra2($_GET['txtPVMuestra2']);
$compbot->setPVMuestra3($_GET['txtPVMuestra3']);
$compbot->setPVMuestra4($_GET['txtPVMuestra4']);
$compbot->setPVMuestra5($_GET['txtPVMuestra5']);
$compbot->setPVMuestra6($_GET['txtPVMuestra6']);
$compbot->setPVMuestra7($_GET['txtPVMuestra7']);
$compbot->setPVMuestra8($_GET['txtPVMuestra8']);
$compbot->setPVMuestra9($_GET['txtPVMuestra9']);
$compbot->setPVMuestra10($_GET['txtPVMuestra10']);
$compbot->setPSMuestra1($_GET['txtPSMuestra1']);
$compbot->setPSMuestra2($_GET['txtPSMuestra2']);
$compbot->setPSMuestra3($_GET['txtPSMuestra3']);
$compbot->setPSMuestra4($_GET['txtPSMuestra4']);
$compbot->setPSMuestra5($_GET['txtPSMuestra5']);
$compbot->setPSMuestra6($_GET['txtPSMuestra6']);
$compbot->setPSMuestra7($_GET['txtPSMuestra7']);
$compbot->setPSMuestra8($_GET['txtPSMuestra8']);
$compbot->setPSMuestra9($_GET['txtPSMuestra9']);
$compbot->setPSMuestra10($_GET['txtPSMuestra10']);



/* * ***************Guardamos los Objetos****************************** */
$pPastoreo = new Persistencia_Pastoreomysqli();
$pPastoreo->guardar($pastoreo, $compbot, $rendForraje, $cultivo);
?>
<html>
    <head>

    </head>
    <body>

        <div class="textosMsj" align="center"><?php echo "Pastoreo Ingresado"; ?></div>

    </body>
</html>