<?php

class Persistencia_mysqli {

    public $row_db;
    private $handle;
    protected $result;
    public $usuario = "root";
    public $contrasenia = "";
    public $base = "agrogestion";
    public $host = "localhost";

    //Genera la conexi�n con base de datos.

    public function __construct() {
//$this->handle = mysqliii_connect($this->host, $this->usuario, $this->contrasenia) or die(mysqliii_error());
        //   mysqliii_select_db($this->base, $this->handle);
        //mysqliii_set_charset('utf8');
        $this->handle = mysqli_connect($this->host, $this->usuario, $this->contrasenia) or die(mysqli_error());
        mysqli_select_db($this->handle, $this->base);
        mysqli_set_charset($this->handle, 'utf8');
    }

    //Ejecuta la consulta a base de datos que recibe por par�metro.

    public function query($sql_string) {
        //echo $sql_string;
        $this->result = mysqli_query($this->handle, $sql_string);
    }

    //Convierte la consulta realizada a base de datos, en una Colecci�n.

    public function show_query() {

        $this->row_db = mysqli_fetch_array($this->result);

        return $this->row_db;
    }

    //Cierra la conexi�n a base de datos.

    public function close() {

        return mysqli_close($this->handle);
    }

}
