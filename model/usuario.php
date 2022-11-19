<?php 

require "../config/conexion.php";

class usuario{

    public $con;

	public function __construct(){
		$this->con=conexion::conex();
	}

    public function get_usuario(){
		$query="SELECT u.idUsuario, u.username, u.email, u.saldo FROM usuarios u;";
		$exe=$this->con->prepare($query);
		$exe->execute();
		return $exe->fetchall();
	}

	public function eliminar($id){
		$query="DELETE FROM usuarios WHERE idUsuarios =? ";
		$exe=$this->con->prepare($query);
		$exe->execute([$id]);

		if($exe->rowcount()){
			header("refresh: 2, url=usuarios_controller.php");
			return "eliminado correctamente";
		}else{
			return "error al eliminar";
		}
	}

	public function set_usuario($datos){
		$query="INSERT INTO usuarios(username, email, password) VALUES(?,?,?)";
		$exe=$this->con->prepare($query);
		$exe->execute([$datos["username"],$datos["email"],$datos["password"]]);

		if($exe->rowcount()){
			header("refresh: 2, url=salidas_controller.php");
			return "guardado correctamente";
		}else{
			return "error al guardar";
		}
	}


}

?>