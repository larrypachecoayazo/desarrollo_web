<?php


class EstudianteDAO {

	private $conexion;
	

	public function __construct( $conexion ) 
    {
    	$this->conexion = $conexion;
    }

	public function insertar()
	{

	}

	public function listar()
	{
		return $this->conexion->ejecutarSql('SELECT * FROM usuario LIMIT 20');
	}

	public function buscarPorId($id)
	{
		$sql = "SELECT * FROM usuario WHERE username =  '$id' ";
		return $this->conexion->ejecutarSql($sql);
	}

	public function actualizar()
	{
		
	}

	public function borrar()
	{
		
	}

}

?>