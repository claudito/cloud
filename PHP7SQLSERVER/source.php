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
CONVERT(VARCHAR(10),fecha_nacimiento,103)fecha_nacimiento

FROM usuario";
$statement = $conexion->prepare($query);
$statement->execute();

//Array
$result = $statement->fetchAll(PDO::FETCH_ASSOC); 

//var_dump($result);

//JSON
$json = ["data"=>$result];

echo json_encode($json);

} catch (Exception $e) {
	
echo "Error: ".$e->getMessage();

}





 ?>