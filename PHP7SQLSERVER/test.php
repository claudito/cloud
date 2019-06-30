<?php 

try {
	
//conexion
$conexion =  new PDO(

'sqlsrv:Server=contactounet.com;database=test',
'sa',
'Hola2019',
array(

PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAME UTF8'
)

);

$conexion->setAttribute(

PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION

);

//Query
$query =  "
SELECT  
id,
nombres,
apellidos,
dni,
fecha_nacimiento FROM usuario";
$statement = $conexion->prepare($query);
$statement->execute();

//Array
$result = $statement->fetchAll(PDO::FETCH_ASSOC); 

var_dump($result);


} catch (Exception $e) {
	
echo "Error: ".$e->getMessage();

}





 ?>