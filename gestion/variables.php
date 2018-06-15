<?php
	
	include_once "../lib/clases.php";

	$util=new Util;
	$id_orden=$util->obtenerIdOrdenDeHash($_GET['orden']);	
	
		
	$orden=new Orden($id_orden);
	$vendedor=new Usuario($orden->id_usuario);
	
	
	
	//VARIABLES DE ORDEN
	$orden_id=$orden->id;
	
	$orden_fecha=aaaammdd_ddmmaaaa($orden->fecha);
	
	$vendedor_nombre=$vendedor->nombre;
	$vendedor_nick=$vendedor->nick;
	
	$comprador=new Comprador($orden->id_comprador);
	
	$comprador_nombre=$comprador->nombre;
	$comprador_nick=$comprador->nick_ml;
	
	
	$query=operacionSQL("SELECT * FROM Orden_Articulo WHERE id_orden=".$orden->id);
	$articulos=array();
	for ($i=0;$i<mysql_num_rows($query);$i++)
	{
		$articulo=new Articulo(mysql_result($query,$i,1));
		
		$articulos[$i]['articulo_titulo']=$articulo->titulo;
		$articulos[$i]['precio']=number_format(mysql_result($query,$i,2),2,',','.');
		$articulos[$i]['cantidad']=mysql_result($query,$i,3);
		$articulos[$i]['tipo']=mysql_result($query,$i,4);
		$articulos[$i]['caracteristicas']=mysql_result($query,$i,5);
		
		$articulos[$i]['img_url']=$articulo->link_img_ml;
		
		
		
	}
	
	
	
	
	

?>
