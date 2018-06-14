<?php

echo "<div class='container centro'>";
    echo "<form action='#' method='post' class=''>";
        //Datos de Pago (Inicio)            
        echo "<div class='card mb-3'>";
            echo "<h6 class='card-header bg-reporte'>";
                echo "<i class='fas fa-money-bill-alt text-white mr-2'></i>";
                echo "<span class='tituloUbuntu text-white'>";
                    echo "Datos de Pago";
                echo "</span>";
            echo "</h6>";

            echo "<div class='card-body borde-reporte rounded-bottom'>";
                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-4 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Fecha de Pago";
                            echo "</label>";
                            echo "<input type='date' class='form-control form-control-sm' aria-describedby='fechaPago' required>";
                        echo "</div>";

                        echo "<div class='col-md-4 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Banco Origen";
                            echo "</label>";
                            echo "<select class='form-control form-control-sm' required>";
                                echo "<option>Banesco</option>";
                                echo "<option>Banco de Venezuela</option>";
                                echo "<option>Provincial</option>";
                                echo "<option>Mercantil</option>";
                                echo "<option>MercadoPago</option>";
                            echo "</select>";
                        echo "</div>";

                        echo "<div class='col-md-4'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Banco Destino";
                            echo "</label>";
                            echo "<select class='form-control form-control-sm' required>";
                                echo "<option>Banesco</option>";
                                echo "<option>Banco de Venezuela</option>";
                                echo "<option>Provincial</option>";
                                echo "<option>Mercantil</option>";
                                echo "<option>MercadoPago</option>";
                            echo "</select>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-6 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Monto";
                            echo "</label>";
                            echo "<input type='tel' name='telefono' class='form-control form-control-sm' aria-describedby='montoPago' required>";
                        echo "</div>";

                        echo "<div class='col-md-6 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "No. Referencia Bancaria";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='montoPago' required>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";     
        //Datos de Pago (Fin)

        //Datos de Facturación (Inicio)            
        echo "<div class='card mb-3'>";
            echo "<h6 class='card-header bg-reporte'>";
                echo "<i class='fas fa-clipboard text-white mr-2'></i>";
                echo "<span class='tituloUbuntu text-white'>";
                    echo "Datos de Facturación";
                echo "</span>";
            echo "</h6>";

            echo "<div class='card-body borde-reporte rounded-bottom'>";
                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-9 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Nombre / Razón Social";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='nombEmpresa' placeholder='Empresa, CA' required>";
                        echo "</div>";

                        echo "<div class='col-md-3 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Cédula / RIF";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='identEmpresa' placeholder='J-1234567' required>";
                        echo "</div>";
                    echo "</div>";

                    echo "<div class='row'>";
                        echo "<div class='col-md-9 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Dirección Fiscal";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='direcEmpresa' placeholder='Venezuela' required>";
                        echo "</div>";
                        
                        echo "<div class='col-md-3 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "No. Teléfono";
                            echo "</label>";
                            echo "<input type='tel' name='telefono' class='form-control form-control-sm' aria-describedby='tlfEmpresa' placeholder='04261234567' required>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";        
        //Datos de Facturación (Fin)

        //Datos de Envío (Inicio)            
        echo "<div class='card mb-3'>";
            echo "<h6 class='card-header tituloUbuntu bg-reporte text-white'>";
                echo "<i class='fas fa-truck mr-3'></i>";
                echo "<span class=''>";
                    echo "Servicio de Encomienda: Domesa";
                echo "</span>";
            echo "</h6>";
            echo "<div class='card-body borde-reporte rounded-bottom'>";

                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-6 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Destinatario";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='nombDestinatario' required>";
                        echo "</div>";

                        echo "<div class='col-md-3 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Cédula / RIF";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='identDestinatario' placeholder='V-12345678' required>";
                        echo "</div>";

                        echo "<div class='col-md-3'>";    
                            echo "<label class='etiqueta-reporte'>";
                                echo "No. Teléfono";
                            echo "</label>";
                            echo "<input type='tlf' class='form-control form-control-sm' aria-describedby='tlfDestinatario' placeholder='0426-1234567' required>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-4'>";
                            echo "<select class='form-control form-control-sm' required>";
                                echo "<option>Agencia de Encomienda</option>";
                                echo "<option>Dirección Particular</option>";
                            echo "</select>";
                        echo "</div>";
                        
                        echo "<div class='col-md-4'>";
                            echo "<label class='form-check-label etiqueta-reporte'>";
                                echo "<input class='form-check-input' type='radio' name='tipoEnvio' id='inlineRadio1' value='' required> Cobro en Destino (COD)";
                            echo "</label>";
                        echo "</div>";

                        echo "<div class='col-md-4'>";
                            echo "<label class='form-check-label etiqueta-reporte'>";
                                echo "<input class='form-check-input' type='radio' name='tipoEnvio' id='inlineRadio2' value='' required> Pago de Contado";
                            echo "</label>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-9 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Dirección";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='direcDestinatario' required>";
                        echo "</div>";
                
                        echo "<div class='col-md-3'>";    
                            echo "<label class='etiqueta-reporte'>";
                                echo "Parroquia";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='paqDestinatario' required>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-3 mb-2'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Municipio";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='munDestinatario' required>";
                        echo "</div>";
                
                        echo "<div class='col-md-3 mb-2'>";    
                            echo "<label class='etiqueta-reporte'>";
                                echo "Ciudad / Pueblo";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='ciudadDestinatario' required>";
                        echo "</div>";

                        echo "<div class='col-md-3 mb-2'>";    
                            echo "<label class='etiqueta-reporte'>";
                                echo "Estado";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='estadoDestinatario' required>";
                        echo "</div>";

                        echo "<div class='col-md-3'>";    
                            echo "<label class='etiqueta-reporte'>";
                                echo "Zona Postal";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='zpDestinatario' required>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<div class='row'>";
                        echo "<div class='col-md-12'>";
                            echo "<label class='etiqueta-reporte'>";
                                echo "Punto de Referencia";
                            echo "</label>";
                            echo "<input type='text' class='form-control form-control-sm' aria-describedby='munDestinatario' required>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        //Datos de Envío (Fin)
        echo "<button type='submit' class='btn btn-siguiente'>";
                echo "<i class='fas fa-paper-plane mr-2'></i>";
                echo "<span class=''>Finalizar Pedido</span>";
        echo "</button>";
    
    echo "</form>";
echo "</div>";

?>