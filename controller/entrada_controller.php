<?php 

class entrada{

    public $obj_dashboard;

	public function index(){
        $titulo = "Finanzas - Entradas";
		require "../view/entrada/entradas.php";
	}

	public function crear(){
        $titulo = "Finanzas - Entradas - Crear";
		require "../view/entrada/entradasCreate.php";
	}

	public function get_datos(){
        $titulo = "Finanzas - Entradas - Editar";
		require "../view/entrada/entradasEdit.php";
	}

	public function login(){
		header("location:login_controller.php");
	}
}

$obj_local = new entrada;

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