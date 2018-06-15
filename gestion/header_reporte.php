<?php

echo "<section class='container-fluid header fixed-top'>";
    echo "<div class='header_opciones py-2'>"; //Apertura de la 1ra. Caja header_opciones
        /*************** LOGO DEL VENDEDOR (INICIO) ****************/
        echo "<img class='ml-3' src='img/logo_menu.png'>";
        /*************** LOGO DEL VENDEDOR (FIN) ****************/
    echo "</div>"; //Cierre de la 1ra. Caja header_opciones

    echo "<div class='header_opciones'>"; //Apertura de la 2da. Caja header_opciones
        echo "<div class='notificaciones_header'>";  // Flexbox interno para todas las alertas del Header (Inicio)
            /*************** ICONO PARA LAS CUENTAS BANCARIAS DEL VENDEDOR (INICIO) ****************/                  
            echo "<div class='icono_alertas'>";
                echo "<i class='fa fa-university mr-1'></i>";
            echo "</div>";
            echo "<div class='alertas_header'>";    //1ra. Caja notificaciones_header (Apertura)
                echo "<a href='' class='enlaces_header' data-toggle='modal' data-target='#bancos'>";
                    echo "Medios de Pagos";
                echo "</a>";
            echo "</div>";
            /*************** ICONO PARA LAS CUENTAS BANCARIAS DEL VENDEDOR (FIN) ****************/

            /*************** ICONO PARA LAS POLITICAS DE ENVIO (INICIO) ****************/
            echo "<div class='icono_alertas'>";
                echo "<i class='fas fa-gavel mr-1'></i>";
            echo "</div>";
            echo "<div class='alertas_header'>";    //1ra. Caja notificaciones_header (Apertura)
                echo "<a href='' class='enlaces_header' data-toggle='modal' data-target='#politicas'>";
                    echo "Mis Políticas";
                echo "</a>";
            echo "</div>";
            /*************** ICONO PARA LAS POLITICAS DE ENVIO (FIN) ****************/

            /*************** ICONO PARA LA UBICACION DE LA TIENDA (INICIO) ****************/
            echo "<div class='icono_alertas'>";
                echo "<i class='fas fa-map-marker-alt mr-1'></i>";
            echo "</div>";
            echo "<div class='alertas_header'>";    //1ra. Caja notificaciones_header (Apertura)
                echo "<a href='' class='enlaces_header' data-toggle='modal' data-target='#sucursales'>";
                    echo "Dirección";
                echo "</a>";
            echo "</div>";
            /*************** ICONO PARA LA UBICACION DE LA TIENDA (FIN) ****************/

        echo "</div>";  //Flexbox interno para todas las alertas del Header (Fin)
    echo "</div>"; //Cierre de la 2da. Caja header_opciones 
echo "</section>"; //Finalización del Encabezado de la página


/********** MEDIOS DE PAGOS (INICIO) ************/
echo "<div class='modal fade' id='bancos' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
    echo "<div class='modal-dialog' role='document'>";
        echo "<div class='modal-content'>";
            echo "<div class='modal-header'>";
                echo "<h6 class='modal-title' id='exampleModalLabel'>Medios de Pago</h6>";
                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    echo "<span aria-hidden='true'>&times;</span>";
                echo "</button>";
            echo "</div>";
            //Mercado Pago habilitado (Inicio)
            echo "<p class='mp'>Aceptamos Mercado Pago</p>";
            //Mercado Pago habilitado (Fin)

            //Cuentas Bancarias personales (Inicio)
            echo "<div class='modal-body'>";
                //Entidad Bancaria (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Banco";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Banesco";
                    echo "</div>";
                echo "</div>";
                //Entidad Bancaria (Fin)

                //Titular (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Titular";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Marlon Rosillo";
                    echo "</div>";
                echo "</div>";
                //Titular (Fin)

                //No. Identificación (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Identificación";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "V-14103686";
                    echo "</div>";
                echo "</div>";
                //No. Identificación (Fin)

                //No. Cuenta (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "No. Cuenta";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "0134 0455 0444 7320 0213";
                    echo "</div>";
                echo "</div><hr>";
                //No. Cuenta (Fin)

                //Entidad Bancaria (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Banco";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Mercantil";
                    echo "</div>";
                echo "</div>";
                //Entidad Bancaria (Fin)

                //Titular (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Titular";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Marlon Rosillo";
                    echo "</div>";
                echo "</div>";
                //Titular (Fin)

                //No. Identificación (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Identificación";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "V-14103686";
                    echo "</div>";
                echo "</div>";
                //No. Identificación (Fin)

                //No. Cuenta (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "No. Cuenta";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "0105 0025 7770 2503 9610";
                    echo "</div>";
                echo "</div><hr>";
                //No. Cuenta (Fin)
                
                //Entidad Bancaria (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Banco";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Provincial";
                    echo "</div>";
                echo "</div>";
                //Entidad Bancaria (Fin)

                //Titular (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Titular";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Marlon Rosillo";
                    echo "</div>";
                echo "</div>";
                //Titular (Fin)

                //No. Identificación (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Identificación";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "V-14103686";
                    echo "</div>";
                echo "</div>";
                //No. Identificación (Fin)

                //No. Cuenta (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "No. Cuenta";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "0108 1234 5643 7803 0001";
                    echo "</div>";
                echo "</div><hr>";
                //No. Cuenta (Fin)

                //Entidad Bancaria (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Banco";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Banco Nacional de Crédito";
                    echo "</div>";
                echo "</div>";
                //Entidad Bancaria (Fin)

                //Titular (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Titular";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "Marlon Rosillo";
                    echo "</div>";
                echo "</div>";
                //Titular (Fin)

                //No. Identificación (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "Identificación";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "V-14103686";
                    echo "</div>";
                echo "</div>";
                //No. Identificación (Fin)

                //No. Cuenta (Inicio)
                echo "<div class='info_header'>";
                    echo "<div class='tipo_infoHeader'>";
                        echo "No. Cuenta";
                    echo "</div>";
                    echo "<div class='descripcion_infoHeader'>";
                        echo "0125 1234 6745 9011 5678";
                    echo "</div>";
                echo "</div><hr>";
                //No. Cuenta (Fin)

            echo "</div>";
            //Cuentas Bancarias personales (Fin)
        echo "</div>";
    echo "</div>";
echo "</div>";
/********** MEDIOS DE PAGOS (FIN) ************/

/********** POLITICAS DE TIENDA (INICIO) ************/
echo "<div class='modal fade' id='politicas' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
    echo "<div class='modal-dialog' role='document'>";
        echo "<div class='modal-content'>";
            echo "<div class='modal-header'>";
                echo "<h6 class='modal-title' id='exampleModalLabel'>Políticas de la Tienda</h6>";
                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    echo "<span aria-hidden='true'>&times;</span>";
                echo "</button>";
            echo "</div>";
            echo "<div class='modal-body'>";
                echo "<p class='politicas'>";
                    echo "Si reportas el pago antes de las 12pm la mercancía saldrá el mismo día a la 3pm, de lo contrario el envío se realizará al siguiente día hábil.";
                echo "</p>";
                echo "<p class='politicas'>";
                    echo "Todos los envíos deberán ser asegurados por el cliente para garantizar la integridad del equipo, ya que no nos hacemos responsables por las pérdidas causadas por el Servicio de Encomienda.";
                echo "</p>";
                echo "<p class='politicas'>";
                    echo "Para validar la garantía de sus productos, se requiere la factura original de compra y la caja del mismo.";
                echo "</p>";
                echo "<p class='politicas'>";
                    echo "Le recordamos que solo cuenta con 3 días contados a partir de la fecha de la compra para reportar su pago por políticas de la tienda, ya que todos nuestros productos son ofrecidos por otros medios por lo que no podemos garantizarle el precio ni su disponibilidad después de ese tiempo.";
                echo "</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</div>";
/********** POLITICAS DE TIENDA (FIN) ************/


/********** DIRECCION DE LA TIENDA (INICIO) ************/
echo "<div class='modal fade' id='sucursales' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
    echo "<div class='modal-dialog' role='document'>";
        echo "<div class='modal-content'>";
            echo "<div class='modal-header'>";
                echo "<h6 class='modal-title' id='exampleModalLabel'>Dirección de la tienda</h6>";
                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    echo "<span aria-hidden='true'>&times;</span>";
                echo "</button>";
            echo "</div>";
            echo "<div class='modal-body'>";
                //Sucursal (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Sucursal";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "C.C. Plaza Las Americas (Nivel Com-2)";
                    echo "</div>";
                echo "</div>";
                //Sucursal (Fin)

                //Dirección (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Dirección";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "Nivel Com-2, Local 29 al 31. Avenida Principal del Cafetal Municipio Baruta, a una cuadra de la subida de los Naranjos. (El Cafetal)";
                    echo "</div>";
                echo "</div>";
                //Dirección (Fin)

                //Teléfonos (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Teléfonos";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "0212-988.05.14/ 0212-988.03.22";
                    echo "</div>";
                echo "</div>";
                //Teléfonos (Fin)

                //Horarios de Atención al Cliente (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Horarios";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "Lunes a Sabado 10:00AM A 7:00PM Domingos: 12:00PM A 6:00PM";
                    echo "</div>";
                echo "</div><hr>";
                //Horarios de Atención al Cliente (Fin)


                //Sucursal (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Sucursal";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "C.C. Plaza Las Americas (Nivel PB)";
                    echo "</div>";
                echo "</div>";
                //Sucursal (Fin)

                //Dirección (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Dirección";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "Nivel Planta Baja. Local PB-12. Avenida Principal del Cafetal, Municipio Baruta, a una cuadra de la subida de los Naranjos. (El Cafetal)";
                    echo "</div>";
                echo "</div>";
                //Dirección (Fin)

                //Teléfonos (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Teléfonos";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "0212-985.65.26 // 985.50.07 // 985.99.23 // 0426-421.27.28";
                    echo "</div>";
                echo "</div>";
                //Teléfonos (Fin)

                //Horarios de Atención al Cliente (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Horarios";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "Lunes a Sabado 10:00AM a 7:00PM Domingos: 1:00PM a 7:00PM";
                    echo "</div>";
                echo "</div><hr>";
                //Horarios de Atención al Cliente (Fin)

                //Sucursal (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Sucursal";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "C.C. Sambil Chacao";
                    echo "</div>";
                echo "</div>";
                //Sucursal (Fin)

                //Dirección (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Dirección";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "Av. Libertador con calle Los Angeles. Nivel Acuario. Local AC-R5. (A dos locales de la Timberland Sambil) Chacao";
                    echo "</div>";
                echo "</div>";
                //Dirección (Fin)

                //Teléfonos (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Teléfonos";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "0212-264.82.65 // 0212-2648267 // 0414-268.66.78";
                    echo "</div>";
                echo "</div>";
                //Teléfonos (Fin)

                //Horarios de Atención al Cliente (Inicio)
                echo "<div class='info_ubicacion'>";
                    echo "<div class='titulo_ubicacion'>";
                        echo "Horarios";
                    echo "</div>";
                    echo "<div class='descripcion_ubicacion'>";
                        echo "Lunes a Sabado 10:00AM a 8:00PM Domingos: 12:00PM a 8:00PM";
                    echo "</div>";
                echo "</div><hr>";
                //Horarios de Atención al Cliente (Fin)
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</div>";
/********** DIRECCION DE LA TIENDA (INICIO) ************/


?>