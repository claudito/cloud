<?php

	include"sunatphp/src/autoload.php";

	$cookie = array(
		'cookie' 		=> array(
			'use' 		=> true,
			'file' 		=> __DIR__ . "/cookie.txt"
		)
	);
	$config = array(
		'representantes_legales' 	=> true,
		'cantidad_trabajadores' 	=> true,
		'establecimientos' 			=> true,
		'cookie' 					=> $cookie
	);
	
	$sunat = new \Sunat\ruc( $config );
	
	$ruc = "10467942820";
	$dni = "46794282";
	
	$search1 = $sunat->consulta( $ruc );
	$search2 = $sunat->consulta( $dni );

var_dump($search1);

?>