<?php 

require "../config/conexion.php";

class entrada{

    public $con;

	public function __construct(){
		$this->con=conexion::conex();
	}

    public function get_entrada(){
		$query="SELECT e.idEntrada, u.username, e.fechaEntrega, e.fechaRegistro, e.factura FROM entradas e INNER JOIN usuarios u ON u.idUsuario = e.idUsuario";
		$exe=$this->con->prepare($query);
		$exe->execute();
		return $exe->fetchall();
	}

	public function eliminar($id){
		$query="DELETE FROM entradas WHERE idEntradas =? ";
		$exe=$this->con->prepare($query);
		$exe->execute([$id]);

		if($exe->rowcount()){
			header("refresh: 2, url=entrada_controller.php");
			return "eliminado correctamente";
		}else{
			return "error al eliminar";
		}
	}

	public function set_entrada($datos){
		$query="INSERT INTO entradas(idUsuario, fechaEntrada, fechaRegistro, factura) VALUES(?,?,?,?)";
		$exe=$this->con->prepare($query);
		$exe->execute([$datos["idUsuario"],$datos["fechaEntrada"],$datos["fechaRegistro"],$datos["factura"]]);

		if($exe->rowcount()){
			header("refresh: 2, url=entrada_controller.php");
			return "guardado correctamente";
		}else{
			return "error al guardar";
		}
	}

	public function get_usuario(){
		$query="SELECT * FROM usuario";
		$exe=$this->con->prepare($query);
		$exe->execute();
		return $exe->fetchall();

	}


}

?>