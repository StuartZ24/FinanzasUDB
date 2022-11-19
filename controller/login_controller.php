<?php 
require "../model/login.php";

class login{

    public $obj_modelo;

	public function __construct(){
		$this->obj_modelo = new validarLogin;
	}

	public function index(){
		require "../view/login.php";
	}

	public function Ingresar(){
		$datos = $this->obj_modelo;
		$datos->user = $_POST["correo"];
		$datos->pass = md5($_POST["pass"]);
		if($this->obj_modelo->validar($datos)==true){
			$mensaje = "<span class='badge badge-pill badge-success'>BIENVENIDO!!</span>";
			header("location:dashboard_controller.php");
		}else{
			$mensaje = "<span class='badge badge-pill badge-danger'>Usuario o contraseña son incorrectas! Intente nuevamente</span>";
			require "../view/login.php";
		}

	}
}

$obj_local = new Login;

if(isset($_POST["action"])){
	$obj_local->Ingresar();
}else{
	$obj_local->Index();
}


?>