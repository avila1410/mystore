<?
	include "variables.php"	
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/reporte.css" rel="stylesheet">
    
    <!-- ------------ Iconos Font Awesone ------------ -->
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-5.0.6/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="font-awesome-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
        
   <!-- ------------ Fuentes disponibles de Google Fonts ------------ -->    
   <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Quicksand|Ubuntu" rel="stylesheet"> -->

</head>

<body>
    <?php include ("connect.php"); ?>
       
    <!-- Encabezado de la Pagina --> 
    <?php include ("header_reporte.php"); ?>
    
    <section class="contenido_reporte container-fluid centro">
        <?php include ("contenido_reporte.php"); ?>
    </section>
    
    <footer class="footer">
        <?php include ("footer_reporte.php"); ?>
    </footer>
    
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>
