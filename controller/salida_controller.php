<?php 

class salida{

    public $obj_dashboard;

	public function index(){
        $titulo = "Finanzas - Salidas";
		require "../view/salida/salidas.php";
	}

	public function crear(){
        $titulo = "Finanzas - Salidas - Crear";
		require "../view/salida/salidasCreate.php";
	}

	public function get_datos(){
        $titulo = "Finanzas - Salidas - Editar";
		require "../view/salida/salidasEdit.php";
	}

	public function login(){
		header("location:login_controller.php");
	}
}

$obj_local = new salida;

@session_start();
if(isset($_SESSION["username"]) ){
    if (isset($_REQUEST["action"])){
        if ($_REQUEST["action"]=="Guardar") {
            $action = "Guardar";
        }elseif($_REQUEST["action"]=="Actualizar"){
            $action = "actualizar";
        }else{
            $action = base64_decode($_REQUEST["action"]);
        }
        $obj_local->$action();
    }else{
        $obj_local->index();
    }
}else{
	$obj_local->login();
}

?>