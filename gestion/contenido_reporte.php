<?php



echo "<div class='container centro'>";
    

        //Datos de la Orden y Lista de Artículos (Inicio)
        echo "<div class='card my-3 borde-reporte'>";
            echo "<div class='card-header text-center borde-reporte bg-reporte'>";
                echo "<span class='tituloUbuntu text-white'>";
                    echo "Orden #".$orden_id." (Paso 1 de su Compra)";
                echo "</span>";
            echo "</div>";

            echo "<div class='EncabezadotituloArticulo'>";
                echo "Detalles de la Orden";
            echo "</div>";

            echo "<div class='card-body'>";
                // Fecha generada de la orden (Inicio)
                echo "<div class='datos-Orden'>";
                    echo "<div class='tipo-datosOrden'>";
                        echo "Fecha:";
                    echo "</div>";
                    echo "<div class='descripcion-datosOrden'>";
                        echo $orden_fecha;
                    echo "</div>";
                echo "</div>";
                // Fecha generada de la orden (Fin)

                // Datos del Vendedor (Inicio)
                echo "<div class='datos-Orden'>";
                    echo "<div class='tipo-datosOrden'>";
                        echo "Vendedor";
                    echo "</div>";
                    echo "<div class='descripcion-datosOrden'>";
                        echo $vendedor_nombre." (".$vendedor_nick.") ";
                    echo "</div>";
                echo "</div>";
                // Datos del Vendedor (Fin)

                //Datos del Comprador (Inicio)
                echo "<div class='datos-Orden'>";
                    echo "<div class='tipo-datosOrden'>";
                        echo "Comprador";
                    echo "</div>";
                    echo "<div class='descripcion-datosOrden'>";
                        echo "<span class='text-capitalize'>".$comprador_nombre."</span>";
                        echo "<span class='text-uppercase'> (".$comprador_nick.")</span>";
                    echo "</div>";
                echo "</div>";
                //Datos del Comprador (Fin)
            echo "</div>";


            //Titulo Lista de Artículos (Inicio)
            echo "<div class='EncabezadotituloArticulo'>";
                echo "Lista de Artículos";
            echo "</div>";
           
		    //Titulo Lista de Artículos (Fin)
			echo "<form id='forma_lista_articulos' action='ordenActualizar.php?id_orden=".$orden_id."' target='iframe_upload' method='post' class=''>";
           		echo "<div id='contenido_lista_articulos'>";
					include_once "articulosLista.php";
		   		echo "</div>";
			echo "</form>";
		   
           
		    echo "<div class='iconos-reporte'>";
                echo "<div class='opciones-reportePago'>";
                    echo "<button type='button' class='btn btn-info btn-reporte' data-toggle='modal' data-target='#listaProductos'>";
                        echo "<i class='fas fa-cart-arrow-down mr-2'></i>";
                        echo "<span>Agregar Artículo</span>";
                    echo "</button>";
                echo "</div>";

                echo "<div class='modal fade' id='listaProductos' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>";
                    echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                            echo "<div class='modal-header'>";
                                echo "<h6 class='modal-title' id='exampleModalLongTitle'>Carrito de Compras</h6>";
                                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                    echo "<span aria-hidden='true'>&times;</span>";
                                echo "</button>";
                            echo "</div>";

                            echo "<div class='modal-body'>";
                                echo "<div class='encabezado-Carrito'>";
                                    //Cantidad de Productos Disponibles (Inicio)
                                    echo "<div class='resultados-Articulos'>";
                                        echo "Mostrando 22341 Artículos";
                                    echo "</div>";
                                    //Cantidad de Productos Disponibles (Fin)

                                    //Motor de Busqueda para los productos (Inicio)
                                    echo "<div class='buscadorArticulos'>";
                                        echo "<form action='' method='' class='was-validated'>";
                                            echo "<div class='input-group'>";
                                                echo "<input type='text' class='form-control form-control-sm cuadroBusqueda' placeholder='Producto a buscar'>";
                                                echo "<span class='input-group-btn'>";
                                                    echo "<button class='btn btn-sm botonBusqueda' type='button'>";
                                                        echo "<i class='fa fa-search text-white' aria-hidden='true'></i>";
                                                    echo "</button>";
                                                echo "</span>";
                                            echo "</div>";
                                        echo "</form>";
                                    echo "</div>";
                                    //Motor de Busqueda para los productos (Fin)
                                echo "</div><hr>";

                                echo "<form class='' action='' method=''>";
                                    echo "<div class='articulosVendedor'>";
                                        //Selector Multiple de Producto (Inicio)
                                        echo "<div class='selector-Articulo'>";
                                            echo "<input type='checkbox' class='' name='producto'>";
                                        echo "</div>";
                                        //Selector Multiple de Producto (Fin)

                                        //Imagen del Producto (Inicio)
                                        echo "<div class='img-articulo'>";
                                            echo "<img src='../img/agricola.jpg' class='rounded-circle mr-2' width='30' height='30' >";
                                        echo "</div>";
                                        //Imagen del Producto (Fin)

                                        //Descripcion del Producto (Inicio)
                                        echo "<div class='titulo-articulo'>";
                                            echo "<div class='descripcion-precio'>";
                                                echo "<div class='descripcionArt'>";
                                                    echo "<a href='#' class='enlaceML-Articulo'>";
                                                        echo "Switch VGA 4 Puertos pasivo Nuevo de paquete 100% Original mod. 123456";
                                                    echo "</a>"; 
                                                echo "</div>";

                                                echo "<div class='precioArt'>";
                                                    echo "122.800.000,00 Bs";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        //Descripcion del Producto (Fin)
                                    echo "</div>";

                                    echo "<div class='articulosVendedor'>";
                                        //Selector Multiple de Producto (Inicio)
                                        echo "<div class='selector-Articulo'>";
                                            echo "<input type='checkbox' class='' name='producto'>";
                                        echo "</div>";
                                        //Selector Multiple de Producto (Fin)

                                        //Imagen del Producto (Inicio)
                                        echo "<div class='img-articulo'>";
                                            echo "<img src='../img/banesco.png' class='rounded-circle mr-2' width='30' height='30' >";
                                        echo "</div>";
                                        //Imagen del Producto (Fin)

                                        //Descripcion del Producto (Inicio)
                                        echo "<div class='titulo-articulo'>";
                                            echo "<div class='descripcion-precio'>";
                                                echo "<div class='descripcionArt'>";
                                                    echo "<a href='#' class='enlaceML-Articulo'>";
                                                        echo "Cámara CCTV Arrecha con un lente de 3.6mm Res. 800 TVL";
                                                    echo "</a>"; 
                                                echo "</div>";

                                                echo "<div class='precioArt'>";
                                                    echo "1.354.000,00 Bs";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        //Descripcion del Producto (Fin)
                                    echo "</div>";

                                    echo "<div class='articulosVendedor'>";
                                        //Selector Multiple de Producto (Inicio)
                                        echo "<div class='selector-Articulo'>";
                                            echo "<input type='checkbox' class='' name='producto'>";
                                        echo "</div>";
                                        //Selector Multiple de Producto (Fin)

                                        //Imagen del Producto (Inicio)
                                        echo "<div class='img-articulo'>";
                                            echo "<img src='../img/banesco.png' class='rounded-circle mr-2' width='30' height='30' >";
                                        echo "</div>";
                                        //Imagen del Producto (Fin)

                                        //Descripcion del Producto (Inicio)
                                        echo "<div class='titulo-articulo'>";
                                            echo "<div class='descripcion-precio'>";
                                                echo "<div class='descripcionArt'>";
                                                    echo "<a href='#' class='enlaceML-Articulo'>";
                                                        echo "Amortiguador Trasero para Chevrolet Optra Design";
                                                    echo "</a>"; 
                                                echo "</div>";

                                                echo "<div class='precioArt'>";
                                                    echo "554.123,67 Bs";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        //Descripcion del Producto (Fin)
                                    echo "</div>";
                                echo "</form>";

                                echo "<div class='iconos-reporte'>";
                                    echo "<div class='opciones-reportePago'>";
                                        echo "<button type='button' class='btn btn-info btn-reporte' data-toggle='modal' data-target='#listaProductos'>";
                                            echo "<i class='fas fa-cart-arrow-down mr-2'></i>";
                                            echo "<span>Agregar artículo</span>";
                                        echo "</button>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='opciones-reportePago'>";
                    echo "<button type='button' class='btn btn-info btn-reporte' onclick='actualizarOrden()' >";
                        echo "<i class='fas fa-sync-alt mr-2'></i>";
                        echo "<span>Actualizar orden</span>";
                    echo "</button>";
                echo "</div>";
            echo "</div>";
            //Datos de la Orden y Lista de Artículos (Fin)

            //Métodos de envío (Inicio)
            echo "<div class='EncabezadotituloArticulo mt-2'>";
                echo "Seleccione la forma de entrega";
            echo "</div>";
            
            echo "<div class='card-header'>";
                echo "<ul class='nav nav-tabs card-header-tabs justify-content-center' id='myTab' role='tablist'>";
                    //Servicio de Encomienda (Inicio)
                    echo "<li class='nav-item'>";
                        echo "<a class='nav-link active opciones-entrega' id='home-tab' data-toggle='tab' href='#metodoEnvio' role='tab' aria-controls='home' aria-selected='true'>";
                            echo "<i class='fas fa-truck'></i> Servicio de Encomienda";
                        echo "</a>";
                    echo "</li>";
                    //Servicio de Encomienda (Fin)

                    //Retiro en Tienda (Inicio)
                    echo "<li class='nav-item'>";
                        echo "<a class='nav-link opciones-entrega' id='profile-tab' data-toggle='tab' href='#retiroTienda' role='tab' aria-controls='profile' aria-selected='false'>";
                            echo "<i class='fas fa-map-marker-alt'></i> Retiro en Tienda";
                        echo "</a>";
                    echo "</li>";
                    //Retiro en Tienda (Fin)
                echo "</ul>";
            echo "</div>";

            echo "<div class='tab-content container-fluid py-1' id='myTabContent'>";
                //Metodo de Envío (Inicio)
                echo "<div class='tab-pane fade show active pt-2' id='metodoEnvio' role='tabpanel' aria-labelledby='home-tab' class='border border-secondary rounded-bottom'>";
                    echo "<form action='' method='get'>";
                        echo "<div id='accordion'>";
                            echo "<div class='mt-1'>";
                                echo "<div class='custom-controls-stacked container-fluid'>";
                                    echo "<label class='custom-control custom-radio'>";
                                        echo "<input id='radioStacked1' name='encomienda' type='radio' class='custom-control-input' required>";
                                        echo "<span class='custom-control-indicator'></span>";
                                        echo "<a href='#ZOOM' class='enlaceML-Articulo' data-toggle='collapse' data-target='#ZOOM' aria-expanded='false' aria-controls='ZOOM'>"; 
                                            echo "<span class='nomb_encomienda custom-control-description'>";
                                                echo "Zoom";
                                            echo "</span>";
                                        echo "</a>";
                                    echo "</label>";
                                echo "</div>";

                                echo "<div id='ZOOM' class='collapse' aria-labelledby='headingTwo' data-parent='#accordion'>";
                                    echo "<div class='p-0 m-2'>";
                                        echo "<div class='card'>";
                                            echo "<span class='obs_encomienda'>";
                                                echo "Los envíos por ZOOM son asegurados obligatoriamente.";
                                                echo "El franqueo postal por este servicio es por un valor de 120.000 Bs para mercancías con un peso menor a 500 gramos, de lo contrario se debe cancelar un monto de 150.000 Bs por el costo de la bolsa de seguridad.";
                                            echo "</span>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";

                            echo "<div class='mt-1'>";
                                echo "<div class='custom-controls-stacked container-fluid'>";
                                    echo "<label class='custom-control custom-radio'>";
                                        echo "<input id='radioStacked1' name='encomienda' type='radio' class='custom-control-input' required>";
                                        echo "<span class='custom-control-indicator'></span>";
                                        echo "<a href='#DOMESA' class='enlaceML-Articulo' data-toggle='collapse' data-target='#DOMESA' aria-expanded='false' aria-controls='DOMESA'>"; 
                                            echo "<span class='nomb_encomienda custom-control-description'>";
                                                echo "Domesa";
                                            echo "</span>";
                                        echo "</a>";
                                    echo "</label>";
                                echo "</div>";

                                echo "<div id='DOMESA' class='collapse' aria-labelledby='headingTwo' data-parent='#accordion'>";
                                    echo "<div class='card p-0 m-2'>";
                                        echo "<div class='card'>";
                                            echo "<span class='obs_encomienda'>";
                                                echo "El seguro del envío es opcional. ";
                                                echo "El franqueo postal por este servicio es por un valor de 52.190 Bs para mercancías con un peso menor a 500 gramos, de lo contrario se debe cancelar un monto de 86.350 Bs por el costo de la bolsa de seguridad.";
                                            echo "</span>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";             
                        echo "</div>";
                    echo "</form>";
                echo "</div>";
                //Metodo de Envío (Fin)

                //Retiro en Tienda (Inicio)
                echo "<div class='tab-pane fade' id='retiroTienda' role='tabpanel' aria-labelledby='profile-tab'>";
                    echo "<form action='' method='get'>";
                        echo "<div id='accordion'>";
                            echo "<div class='mt-1'>";
                                echo "<div class='custom-controls-stacked container-fluid'>";
                                    echo "<label class='custom-control custom-radio'>";
                                        echo "<input id='radioStacked1' name='retiroPersonal' type='radio' class='custom-control-input' required>";
                                        echo "<span class='custom-control-indicator'></span>";
                                        echo "<a href='#sitio1' class='enlaceML-Articulo' data-toggle='collapse' data-target='#sitio1' aria-expanded='false' aria-controls='sitio1'>"; 
                                            echo "<span class='nomb_encomienda custom-control-description'>";
                                                echo "C.C. Sambil Chacao";
                                            echo "</span>";
                                        echo "</a>";
                                    echo "</label>";
                                echo "</div>";

                                echo "<div id='sitio1' class='collapse' aria-labelledby='headingTwo' data-parent='#accordion'>";
                                    echo "<div class='p-0 m-2'>";
                                        echo "<div class='card'>";
                                            echo "<span class='obs_encomienda'>";
                                                echo "Dirección: Av. Libertador con calle Los Angeles. Nivel Acuario. Local AC-R5. (A dos locales de la Timberland Sambil) Chacao.";
                                                echo "Teléfonos: 0212-264.82.65 // 0212-2648267 // 0414-268.66.78.";
                                                echo "Horarios: Lunes a Sabado 10:00AM a 8:00PM Domingos: 12:00PM a 8:00PM";
                                            echo "</span>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";

                            echo "<div class='mt-1'>";
                                echo "<div class='custom-controls-stacked container-fluid'>";
                                    echo "<label class='custom-control custom-radio'>";
                                        echo "<input id='radioStacked1' name='retiroPersonal' type='radio' class='custom-control-input' required>";
                                        echo "<span class='custom-control-indicator'></span>";
                                        echo "<a href='#sitio2' class='enlaceML-Articulo' data-toggle='collapse' data-target='#sitio2' aria-expanded='false' aria-controls='sitio2'>"; 
                                            echo "<span class='nomb_encomienda custom-control-description'>";
                                                echo "C.C. Plaza Las Americas (Nivel PB)";
                                            echo "</span>";
                                        echo "</a>";
                                    echo "</label>";
                                echo "</div>";

                                echo "<div id='sitio2' class='collapse' aria-labelledby='headingTwo' data-parent='#accordion'>";
                                    echo "<div class='card p-0 m-2'>";
                                        echo "<div class='card'>";
                                            echo "<span class='obs_encomienda'>";
                                                echo "Dirección: Av. Libertador con calle Los Angeles. Nivel Acuario. Local AC-R5. (A dos locales de la Timberland Sambil) Chacao";
                                                echo "Teléfonos: 0212-264.82.65 // 0212-2648267 // 0414-268.66.78";
                                                echo "Horarios: Lunes a Sabado 10:00AM a 8:00PM Domingos: 12:00PM a 8:00PM";
                                            echo "</span>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";             
                        echo "</div>";
                     echo "</form>";
                echo "</div>";
                //Retiro en Tienda (Fin)
            echo "</div>";
        echo "</div>";
            
    
    echo "</div>";
        echo "<button type='submit' class='btn btn-siguiente'>";
            echo "<i class='fas fa-arrow-circle-right mr-2'></i>";
            echo "<span class=''>Siguiente</span>";
        echo "</button>";
    
echo "</div>";





    ?>