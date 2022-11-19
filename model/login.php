<?php 

require "../config/conexion.php";

class validarLogin{
    
    private $con;

    public function __construct(){
        $this->con = conexion::conex();
    }

	public function validar($datos){
		
		$query="SELECT * FROM usuarios WHERE email=? AND password=?";
		$exe=$this->con->prepare($query);
		$exe->execute([$datos->user,$datos->pass]);

		if($exe->rowCount()>0){

			foreach ($exe->fetchAll() as $datos) {
				session_start();
				$_SESSION["id"] = $datos[0];
				$_SESSION["username"] = $datos[1];
				$_SESSION["saldo"] = $datos[4];
			}
			return true;

		}else{
			return false;
		} 

	}
    
}


?>