<?php 

require "../config/conexion.php";

class salida{

    public $con;

	public function __construct(){
		$this->con=conexion::conex();
	}

    public function get_salida(){
		$query="SELECT s.idEntrada, u.username, s.fechaSalida, s.fechaRegistro, s.factura FROM salidas s INNER JOIN usuarios u ON u.idUsuario = s.idUsuario;";
		$exe=$this->con->prepare($query);
		$exe->execute();
		return $exe->fetchall();
	}

	public function eliminar($id){
		$query="DELETE FROM salidas WHERE idSalidas =? ";
		$exe=$this->con->prepare($query);
		$exe->execute([$id]);

		if($exe->rowcount()){
			header("refresh: 2, url=salidas_controller.php");
			return "eliminado correctamente";
		}else{
			return "error al eliminar";
		}
	}

	public function set_salida($datos){
		$query="INSERT INTO salidas(idUsuario, fechaSalida, fechaRegistro, factura) VALUES(?,?,?,?)";
		$exe=$this->con->prepare($query);
		$exe->execute([$datos["idUsuario"],$datos["fechaEntrada"],$datos["fechaRegistro"],$datos["factura"]]);

		if($exe->rowcount()){
			header("refresh: 2, url=salidas_controller.php");
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