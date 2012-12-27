<?php 

include 'ShowRoom.php';

$ShowRoom = new ShowRoom;

$ShowRoom->dbConexion('localhost','root','root','Proveedores');
$ShowRoom->dbConexion('localhost','root','root','clientes');
	
echo mysql_result(mysql_query('SELECT t1.nombre as db_1  , t2.nombre as db_2 FROM Proveedores.usuarios 
						as t1 inner join clientes.usuarios as t2 on t1.id = t2.id where t1.id = 1 '),0,1);*/



echo $ShowRoom->recursivo(5);



 ?>