<?php

	date_default_timezone_set("America/Montevideo");	

	require_once("Persistencia_mysqlii.php");	

	class Persistencia_Usuariomysqlii 

	extends Persistencia_mysqlii

	{

			//Se seleccionan todos los usuarios registrados en el sistema.

		public function buscarU()

		{

			$this->query("SELECT Contrasena, Usuario, TipoUsuario, Unidad FROM usuario");			

			return $this->result;

		}

		//Todos los usuarios del sistema.

		public function buscarUE()

		{

			$this->query("SELECT Usuario FROM usuario");			

			return $this->result;

		}

		//Seleccionamos todos los datos del usuario con el id enviado por parametro.

		public function buscarUxId($uni)

		{

			$this->query("SELECT u.idUsuario, u.Cedula, u.Usuario, u.Contrasena, u.Nombre, u.Apellido, u.Localidad,  p.Tipo, u.Activo, u.Departamento 

						 FROM permiso p

						 INNER JOIN usuario u ON u.Usuario = p.Usuario

						 WHERE idUnidad=".$uni."");		

			return $this->result;

		}

		//Seleccionar usuarios de una unidad.

		public function usuarioxid($idU)

		{

			$this->query("SELECT u.idUsuario, u.Cedula, u.Usuario, u.Contrasena, u.Nombre, u.Apellido, u.Localidad,  p.Tipo, u.Activo, u.Departamento 

						 FROM permiso p

						 INNER JOIN usuario u ON u.Usuario = p.Usuario

						 WHERE u.idUsuario=".$idU."");			

			return $this->result;

		}

			//Buscamos los usuarios que contengan usuario y contraseña enviada por parametro.		

		public function buscarxidpass($usu, $cont)

		{

			$usuario= $usu;

			$contrase=$cont;

			$this->query( "SELECT * FROM usuario WHERE Usuario='".$usuario."' and Contrasena='".$contrase."'");			

			return $this->result;

		}

			//Validamos usuario y contraseña del usuario enviado por parametro ademas estar asignado a la unidad.

		public function validarusuario($usu, $cont, $unidad)

		{

			$usuario= $usu;

			$contrase=$cont;			

			$uni=$unidad;

			$csql = "SELECT u.idUsuario, u.Nombre, u.Apellido, p.Tipo

					 FROM permiso p

					 INNER JOIN usuario u ON u.Usuario = p.Usuario

					 WHERE u.Usuario = '".$usu."'

					 AND u.Contrasena = '".$contrase."'

					 AND p.idUnidad = '".$unidad."'"; 

			$this->query($csql);			

			return $this->result;

		}

			//Guardamos el usuarios enviado por parametro y lo asignamos  a la Unidad enviada por parametro.	

		public function guardar($usuario, $unidad)

		{

			

			$csql = "INSERT INTO	usuario (Cedula	,TipoUsuario	,Usuario,	Activo	,Contrasena	,	Departamento, Nombre, Apellido, Localidad, Unidad)	VALUES (". $usuario->getCedula	().", '" . $usuario->getTipoUsuario	()."', '" . $usuario->getUsuario	()."', '" . $usuario->getActivo	()."', '" . $usuario->getContrasena	()."', '" . $usuario->getDepartamento	()."', '" . $usuario->getNombre	()."', '" . $usuario->getApellido	()."', '" . $usuario->getLocalidad	()."', ".$unidad.")";	

			$this->query($csql);	

			$this->asignarUnidad($usuario->getUsuario(),$unidad, $usuario->getTipoUsuario());

		}

		

				//Modificamos el usuario enviado por parametro.

			public function modificar($usuario, $unidad)

		{

			

			$csql = "UPDATE usuario	SET Cedula= ".$usuario->getCedula().", Usuario= '".$usuario->getUsuario()."',	Contrasena= '".$usuario->getContrasena()." ',	Nombre	= '".$usuario->getNombre()." ',	Apellido= '".$usuario->getApellido	()." ',	Localidad= '".$usuario->getLocalidad()." ',	TipoUsuario= '".$usuario->getTipoUsuario()." ',	Activo= '".$usuario->getActivo()." ', Departamento= '".$usuario->getDepartamento()."' WHERE idUsuario=".$usuario->getIdUsuario()."";

			$this->query($csql);		

			

			$sq= "UPDATE permiso SET Tipo = '".$usuario->getTipoUsuario()."' WHERE idUnidad =".$unidad." AND Usuario='".$usuario->getUsuario()."'";

			$this->query($sq);

			

			return $this->result;

		}

				//Dejamos el usuario como no asignado a la unidad.

			public function desafectarU($Usuario, $unidad)

		{

			$SQL= "DELETE FROM permiso WHERE Usuario='".$Usuario."' AND idUnidad=".$unidad.""; 

			

			$this->query($SQL);				

		}

		

		 //Retorna verdadero si existe el usuario en el sistema  que llega por par�metro ya existe en la tabla "cultivo".

    public function existe($idU) {

        $this->query("SELECT idUsuario

					  FROM usuario 

					  WHERE idUsuario = '" . $idU. "'");

        while ($ee = $this->show_query()) {

            return true;

        }

        return false;

    }

		//Retorna el ultimo id de la tabl usuario.

		public function ultimoID()

		{

			$SQL= "SELECT idUsuario FROM `usuario` ORDER BY `idUsuario` DESC LIMIT 1";

					

			$this->query($SQL);	

			return $this->result;			

		}

			//Retorna usuarios no asignados  a la Unidad enviada por parametro.

	public function buscarNoAsig($uni)

		{

			$this->query("SELECT idUsuario, Cedula, Usuario, Contrasena, Nombre, Apellido, Localidad,  TipoUsuario, Activo, Departamento FROM usuario WHERE Usuario NOT IN(SELECT Usuario

											   FROM permiso

											   WHERE idUnidad='".$uni."')");			

			return $this->result;

		}

			//Asigna el usuario enviado por parametro a  la unidad enviada por parametro.

	public function asignarUnidad($usuario,$uni, $permiso)

		{

			$this->query("INSERT INTO permiso (idUnidad, Usuario, Tipo) 

							VALUES(".$uni.", '".$usuario."','".$permiso."')");			

		}

			//Cambia la contraseña del usuario.

		public function cambioCont($usuario,$cont)

		{

			$sql="UPDATE usuario

						  SET Contrasena='".$cont."'

						  WHERE idUsuario=".$usuario."";

			$this->query($sql);			

		}

	}

?>

