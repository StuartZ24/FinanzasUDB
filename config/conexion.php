<?php 

/**
 * 
 */
class conexion
{
	public function conex()
	{
		$pdo = new PDO("mysql: host=localhost; dbname=finanzas_udb; charset=utf8;","root","");
		return $pdo;
	}
}

// $obj = new conexion;

// if ($obj->conex()) {
// 	echo "conexion exitosa";
// }else{
// 	echo "Error al conectar";
// }

?>