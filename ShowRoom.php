<?php 


class ShowRoom {


public function dbConexion($host,$usuario,$pass,$dbName)
{

	$db_connect = mysql_connect($host,$usuario,$pass)
		or die ("Fallo en el establecimiento de la conexión");

	$db_select = mysql_select_db($dbName)
		or die("Error en la selección de la base de datos");

}


} // end class ShowRoom


$ShowRoom = new ShowRoom;

$ShowRoom->dbConexion('localhost','root','root','Proveedores');





?>