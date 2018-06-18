<?
	include_once "../lib/clases.php";
	
	if (isset($articulos)==false)
	{
		$orden=new Orden($_GET['id_orden']);
		
		$query=operacionSQL("SELECT * FROM Orden_Articulo WHERE id_orden=".$orden->id);
		$articulos=array();
		for ($i=0;$i<mysql_num_rows($query);$i++)
		{
			$articulo=new Articulo(mysql_result($query,$i,1));
			
			$articulos[$i]['articulo_id']=$articulo->id;
			$articulos[$i]['articulo_titulo']=$articulo->titulo;
			$articulos[$i]['precio']=number_format(mysql_result($query,$i,2),2,',','.');
			$articulos[$i]['cantidad']=mysql_result($query,$i,3);
			$articulos[$i]['tipo']=mysql_result($query,$i,4);
			$articulos[$i]['caracteristicas']=mysql_result($query,$i,5);
			
			
			$articulos[$i]['link_ml']=$articulo->link_ml;
			
			
			if (file_exists("../art_img/".$articulo->id))
				$articulos[$i]['img_url']="../art_img/".$articulo->id."_muestra";
			else
				$articulos[$i]['img_url']=$articulo->link_img_ml;
			
		}
	}
	
	
	
	


	 //Mostrando la lista de los Artículos del pedido del comprador (Inicio)
            $cant = count($articulos);

            for ($k=0;$k<$cant;$k++)
            {
                echo "<div class='listaArticulos-Orden'>";
                    //Eliminar Artículo (Fin)
                    echo "<div class='seleccionArticulo'>";
                        //echo "<a href='javascript:articuloEliminar(".$articulos[$k]['articulo_id'].")' class='ml-1'>";
                            //echo "<i class='far fa-trash-alt'></i>";
                        //echo "</a>";
                
                        echo "<a href='' class='text-danger ml-1' data-toogle='modal' data-target='#eliminarArticulo' >";
                            echo "<i class='far fa-trash-alt'></i>";
                        echo "</a>";
                        
                                
                
                    echo "</div>";
                    //Eliminar Artículo (Fin)
                    
                    //Cantidad del Artículo (Inicio)
                    echo "<div class='cantArticulo'>";
                        echo "<input type='number' id='cantidad_".$articulos[$k]['articulo_id']."' name='cantidad_".$articulos[$k]['articulo_id']."' min='1' max='50' class='form-control form-control-sm' value=".$articulos[$k]['cantidad']." required='required'>";
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



// Mensaje para eliminar Articulo (Inicio)
                        echo "<div class='modal fade' id='eliminarArticulo' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                            echo "<div class='modal-dialog' role='document'>";
                                echo "<div class='modal-content'>";
                                    echo "<div class='modal-header'>";
                                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                        echo "<span aria-hidden='true'>&times;</span>";
                                        echo "</button>";
                                    echo "</div>";
                            
                                    echo "<div class='modal-body'>";
                                        echo "Está seguro de eliminar el Artículo seleccionado???";
                                    echo "/div>";
                            
                                    echo "<div class='modal-footer'>";
                                        echo "<button type='button' class='btn btn-light' data-dismiss='modal'>Close</button>";
                                        echo "<button type='button' class='btn btn-danger'>Eliminar Artículo</button>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        // Mensaje para eliminar Articulo (Fin) 

?>