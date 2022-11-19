<?php 

class balance{

    public $obj_dashboard;

	public function index(){
        $titulo = "Finanzas - Balance";
		require "../view/balance.php";
	}

	public function login(){
		header("location:login_controller.php");
	}
}

$obj_local = new balance;
@session_start();
if(isset($_SESSION["username"]) ){
	$obj_local->index();
}else{
	$obj_local->login();
}


?>