<?php 

class home{

    public $obj_home;

	public function index(){
		require "../view/home.php";
	}
}

$obj_local = new home;

$obj_local->index();


?>