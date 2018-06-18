<?php
	include ("variables.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte de Pago</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/reporte.css" rel="stylesheet">
    
    <!-- ------------ Iconos Font Awesone ------------ -->
    <link rel="stylesheet" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome-5.0.6/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../font-awesome-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
        
   <!-- ------------ Fuentes disponibles de Google Fonts ------------ -->    
   <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Quicksand|Ubuntu" rel="stylesheet"> -->
<script src="../lib/js/ajax.js"></script>
<script src="../lib/js/util.js"></script>
<script type="text/javascript">

	function articuloEliminar(id_articulo)
	{
		var id_orden=document.getElementById("id_orden").value;
		
		var dec=window.confirm("Seguro de eliminar este articulo?");
		if (dec==true)
			document.getElementById("iframe_upload").src="articuloEliminar.php?id_orden="+id_orden+"&id_articulo="+id_articulo;
	}
	
	
	function actualizarOrden()
	{
		document.getElementById("forma_lista_articulos").submit();
		document.getElementById("contenido_lista_articulos").innerHTML="<p align='center'><img src='../mercasist_img/bigrotation2.gif' /><p>";
	}
	
	function getArticulosLista()
	{
		var id_orden=document.getElementById("id_orden").value;
		
		req=getXMLHttpRequest();
		req.onreadystatechange=process_getArticulosLista;
		req.open("GET","articulosLista.php?id_orden="+id_orden,true);
		req.send(null);
	}
	
	function process_getArticulosLista()
	{
		if (req.readyState==4)
		{
			if (req.status==200)
			{			
				var response=req.responseText;	
				
				document.getElementById("contenido_lista_articulos").innerHTML=response;
							
			} 
			else
				window.alert("Ha ocurrido un problema");      
		}
	}


</script>



</head>

<body>
    
    <?php include ("variables.php"); ?>
       
    <!-- Encabezado de la Pagina --> 
    <?php include ("header_reporte.php"); ?>
    
    
    
    <section class="contenido_reporte container-fluid centro">
      <?php include ("contenido_reporte.php"); ?>
</section>
    
     <!--<footer class="footer">
        <?php //include ("footer_reporte.php"); ?>
    </footer>
    
    <!-- Bootstrap core JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
	
    
    <!-- Hidden -->
    <input type="hidden" name="id_orden" id="id_orden" value="<? echo $orden_id  ?>" />
    
    
    
    <iframe style="display:none;" width="800" height="500" id="iframe_upload" name="iframe_upload" src="" ></iframe>
    
    
    
</body>

</html>
