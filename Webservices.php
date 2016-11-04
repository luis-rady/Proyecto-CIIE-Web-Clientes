<?php

include_once(dirname(__FILE__) . "/ConnectDB.php");

function traerSalones(){

	//query
	$consulta = "SELECT * FROM salon";

	// Ejecutar la consulta
	$resultado = mysql_query($consulta);

	//se recorre cada renglon del resultado
	while ($row = mysql_fetch_array($resultado)) {
	    $salones[] = array(
            "idSalon"    => utf8_encode($row['id']),
            "capacidad"  => utf8_encode($row['capacidad']),
            "aula"       => utf8_encode($row['aula'])
        );
	}

	return $salones;
}

function traerEventos(){
	return 1;
}

function traerConferencistas(){
 	return 1;
}


?>
