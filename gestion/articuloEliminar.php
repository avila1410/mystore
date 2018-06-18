<?
	include_once "../lib/clases.php";
	
	$orden=new Orden($_GET['id_orden']);
	$id_articulo=$_GET['id_articulo'];
	
	
	operacionSQL("DELETE FROM Orden_Articulo WHERE id_orden=".$orden->id." AND id_articulo=".$id_articulo);


?>

<script type="text/javascript">
	
	window.parent.getArticulosLista();

</script>