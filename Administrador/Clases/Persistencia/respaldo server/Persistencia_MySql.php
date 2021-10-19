<?php



class Persistencia_mysqlii



{



	public $row_db;



	private $handle;



	protected $result;



	public $usuario = "einiaarc";



	public $contrasenia = "p&psystemsP2o1p";



	public $base = "einiaarc_unidades";



	public $host = "localhost";






	//Genera la conexiÃ³n con base de datos.



	public function __construct()



	{



   		$this->handle = mysqlii_connect($this->host, $this->usuario, $this->contrasenia) or die(mysqlii_error());



   		mysqlii_select_db($this->base, $this->handle);

		mysqlii_set_charset('utf8');



 	}



	



	//Ejecuta la consulta a base de datos que recibe por parÃ¡metro.



	public function query($sql_string)



	{



   		$this->result = mysqlii_query($sql_string, $this->handle);



 	}







	//Conviente la consulta realizada a base de datos, en una ColecciÃ³n.



 	public function show_query()



	{



   		$this->row_db = mysqliii_fetch_array($this->result);



   		return $this->row_db;



 	}



	



	//Cierra la conexiÃ³n a base de datos.



 	public function close()



	{



   		return mysqlii_close($this->handle);



 	}



}







?>