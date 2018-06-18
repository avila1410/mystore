<?


	 //Mostrando la lista de los Artículos del pedido del comprador (Inicio)
            $cant = count($articulos);

            for ($k=0;$k<$cant;$k++)
            {
                echo "<div class='listaArticulos-Orden'>";
                    //Eliminar Artículo (Fin)
                    echo "<div class='seleccionArticulo'>";
                        echo "<a href='#' class='ml-1'>";
                            echo "<i class='far fa-trash-alt'></i>";
                        echo "</a>";
                    echo "</div>";
                    //Eliminar Artículo (Fin)
                    
                    //Cantidad del Artículo (Inicio)
                    echo "<div class='cantArticulo'>";
                        echo "<input type='number' name='' min='1' max='50' class='form-control form-control-sm' value=".$articulos[$k]['cantidad']." required='required'>";
                    echo "</div>";
                    //Cantidad del Artículo (Fin)            
                
                    //Imagen del Artículo (Inicio)
                    echo "<div class='imgArticulo ml-2'>";
                        echo "<img src=".$articulos[$k]['img_url']." height='45' width='45'>";
                    echo "</div>";
                    //Imagen del Artículo (Fin)

                    //Descripcion del Articulo (Inicio)
                    echo "<div class='descripcionArticulo ml-2'>";
                       echo "<div class='descripcion-precio'>";
                            //Descripción del Artículo (Inicio)
                            echo "<div class='descripcionArt'>";
                                echo "<a href=".$articulos[$k]['link_ml']." class='enlaceML-Articulo' target='_blank'>";
                                    echo $articulos[$k]['articulo_titulo'];
                                echo "</a>"; 
                            echo "</div>";
                            //Descripción del Artículo (Fin)

                            //Caracteristicas Especiales del Producto (Inicio)
                            if (empty($articulos[$k]['tipo']))
                            {
                                echo "No mostrar nada";
                            }
                            else
                            {
                                echo "Hay un valor en la variable";
                            }
                            //Caracteristicas Especiales del Producto (Fin)
                
                            //Precio del Artículo (Inicio)
                            echo "<div class='precioArt'> Precio: ";
                                echo $articulos[$k]['precio'];
                            echo "</div>";
                            //Precio del Artículo (Fin)
                        echo "</div>";
                    echo "</div>";
                    //Descripcion del Articulo (Inicio)
                
                echo "</div>";
            }
            //Mostrando la lista de los Artículos del pedido del comprador (Fin)





?>