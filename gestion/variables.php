<?php
	
	include_once "../lib/clases.php";

	$util=new Util;
	$id_orden=$util->obtenerIdOrdenDeHash($hash);	
	
		
	$orden=new Orden($id_orden);
	$vendedor=new Usuario($orden->id_usuario);
	
	
	
	//VARIABLES DE ORDEN
	$orden_id=$orden->id;
	
	$orden_fecha=aaaammdd_ddmmaaaa($orden->fecha);
	
	$vendedor_nombre=$vendedor->nombre;
	$vendedor_nick=$vendedor->nick;
	
	
	
	

?>
