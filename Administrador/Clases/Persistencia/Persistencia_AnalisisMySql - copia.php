<?php

require_once("Persistencia_mysqli.php");

class Persistencia_Usuariomysqli extends Persistencia_mysqli {

    public function buscarU() {
        $this->query("SELECT Contrasena, Usuario, TipoUsuario, Unidad FROM usuario");
        return $this->result;
    }

    public function buscarxidpass($usu, $cont) {
        $usuario = $usu;
        $contrase = $cont;
        $this->query("SELECT * FROM usuario WHERE Usuario='" . $usuario . "' and Contrasena='" . $contrase . "'");
        return $this->result;
    }

}

