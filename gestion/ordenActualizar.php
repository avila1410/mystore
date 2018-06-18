<?
	include_once "../lib/clases.php";
	
	$orden=new Orden($_GET['id_orden']);
	
	
	$query=operacionSQL("SELECT id_articulo FROM Orden_Articulo WHERE id_orden=".$orden->id);
	$articulos=array();
	for ($i=0;$i<mysql_num_rows($query);$i++)
	{
		$id_articulo=mysql_result($query,$i,0);
	
		$articulo=new Articulo($id_articulo);
		
		echo $articulo->titulo;
		echo "<br />";
		echo $cantidad=$_POST['cantidad_'.$id_articulo];
		echo "<br /><br /><br />";
		
		
		operacionSQL("UPDATE Orden_Articulo SET cantidad=".$cantidad." WHERE id_orden=".$orden->id." AND id_articulo=".$articulo->id);
		
	
	}
	
	
?>
<script type="text/javascript">
	
	window.parent.getArticulosLista();

</script>