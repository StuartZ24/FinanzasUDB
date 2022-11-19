<?php 

class dashboard{

    public $obj_dashboard;

	public function index(){
        $titulo = "Finanzas - Dashboard";
		require "../view/dashboard.php";
	}

	public function login(){
		header("location:login_controller.php");
	}
}

$obj_local = new dashboard;
@session_start();
if(isset($_SESSION["username"]) ){
	$obj_local->index();
}else{
	$obj_local->login();
}


?>