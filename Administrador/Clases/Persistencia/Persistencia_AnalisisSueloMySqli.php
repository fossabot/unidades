<?php

date_default_timezone_set("America/Montevideo");
require_once("Persistencia_mysqli.php");

class Persistencia_AnalisisSuelomysqli extends Persistencia_mysqli {

    public function guardar($cultivo, $as) {
        //Obtenemos ID y NOMBRE de Usuario creador.
        session_start();
        $idUsuario = $_SESSION['uid'];
        $Nombre = $_SESSION['nombreU'];
        //Obtenemos Fecha y Hora Actual:
        $Fecha = getdate();
        $FechaTxt = $Fecha["year"] . "-" . $Fecha["mon"] . "-" . $Fecha["mday"];
        $HoraTxt = $Fecha["hours"] . ":" . $Fecha["minutes"] . ":" . $Fecha ["seconds"];
        //Creamos la información a mostrar de la tarea:
        $info = "<strong> Datos de Análisis  Suelo: </strong> </br>				
			IdLab	:      " . $as->getIdLab() . "</br>
			Fecha Muestreo	:      " . $as->getFechaMuestreo() . "</br>
			Profundidad	:      " . $as->getProfundidad() . "</br>
			Número de Pinchazos	:      " . $as->getNumPinchazos() . "</br>
			SS	:      " . $as->getSS() . "</br>
			pHagua	:      " . $as->getpHagua() . "</br>
			phKCl	:      " . $as->getphKCl() . "</br>
			PBrayI	:      " . $as->getPBrayI() . "</br>
			Presinas	:      " . $as->getPresinas() . "</br>
			Paccítrico	:      " . $as->getPaccitrico() . "</br>
			Ca	:      " . $as->getCa() . "</br>
			Mg	:      " . $as->getMg() . "</br>
			K	:      " . $as->getK() . "</br>
			Na	:      " . $as->getNa() . "</br>
			B	:      " . $as->getB() . "</br>
			Cu	:      " . $as->getCu() . "</br>
			Fe	:      " . $as->getFe() . "</br>
			Mn	:      " . $as->getMn() . "</br>
			Zn	:      " . $as->getZn() . "</br>
			Sulfatos	:      " . $as->getSulfatos() . "</br>
			Textura	:      " . $as->getTextura() . "</br>
			Nitratos	:      " . $as->getNitratos() . "</br>
			Amonio	:      " . $as->getAmonio() . "</br>
			Carbonatos	:      " . $as->getCarbonatos() . "</br>
			Nitrógeno Total	:      " . $as->getNitrogenoTotal() . "</br>
			Al	:      " . $as->getAl() . "</br>
			Acidez Titulable	:      " . $as->getAcidezTitulable() . "</br>
			Carbono Orgánico	:      " . $as->getCarbonoOrganico() . "</br>
			CE	:      " . $as->getCE() . "</br>
			PMN	:      " . $as->getPMN() . "</br>
			CICpH7	:      " . $as->getCICpH7() . "</br>
			Densidadaparente	:      " . $as->getDensidadaparente() . "</br>
			Registrado Por:        " . $Nombre . " " . $FechaTxt . "";
        //Guardamos la tarea referenciada a un Cultivo
        $this->query("INSERT INTO tarea (Fecha, NombreCat, data, idCultivo, idUsuario, horaCarga) VALUES ('" . $FechaTxt . "', 'Analisis Suelo', '" . $info . "', '" . $cultivo . "', '" . $idUsuario . "', '" . $HoraTxt . "')");
        //Obtenemos el id de la tarea ingresada.
        $this->query("SELECT idTarea FROM `tarea` ORDER BY `idTarea` DESC LIMIT 1");
        $ci = mysqli_fetch_array($this->result);
        //Guardamos la Información de analisis del suelo referenciada a la tarea anterior.			
        $sql = "INSERT INTO `analisissuelo`( `IdLab`, `FechaMuestreo`, `Profundidad`, `NumPinchazos`, `SS`, `pHagua`, `phKCl`, `PBrayI`, `Presinas`, `Paccitrico`, `Ca`, `Mg`, `K`, `Na`, `B`, `Cu`, `Fe`, `Mn`, `Zn`, `Sulfatos`, `Textura`, `Nitratos`, `Amonio`, `Carbonatos`, `NitrogenoTotal`, `Al`, `AcidezTitulable`, `CarbonoOrganico`, `CE`, `PMN`, `CICpH8`, `Densidadaparente`, `idTarea`) VALUES ('" . $as->getIdLab() . "', '" . $as->getFechaMuestreo() . "', '" . $as->getProfundidad() . "', '" . $as->getNumPinchazos() . "', '" . $as->getSS() . "', '" . $as->getpHagua() . "', '" . $as->getphKCl() . "', '" . $as->getPBrayI() . "', '" . $as->getPresinas() . "', '" . $as->getPaccitrico() . "', '" . $as->getCa() . "', '" . $as->getMg() . "', '" . $as->getK() . "', '" . $as->getNa() . "', '" . $as->getB() . "', '" . $as->getCu() . "', '" . $as->getFe() . "', '" . $as->getMn() . "', '" . $as->getZn() . "', '" . $as->getSulfatos() . "', '" . $as->getTextura() . "', '" . $as->getNitratos() . "', '" . $as->getAmonio() . "', '" . $as->getCarbonatos() . "', '" . $as->getNitrogenoTotal() . "', '" . $as->getAl() . "', '" . $as->getAcidezTitulable() . "', '" . $as->getCarbonoOrganico() . "', '" . $as->getCE() . "', '" . $as->getPMN() . "', '" . $as->getCICpH7() . "', '" . $as->getDensidadaparente() . "', '" . $ci['idTarea'] . "')";
        //echo $sql;
        $this->query($sql);
    }

}

?>
