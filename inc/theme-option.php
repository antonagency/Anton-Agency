<?php

$wpts = new wp_theme_settings(
    array(
        'general' => array(
            'title' => 'Anton Agency',
            'menu_title' => 'Anton Option',
            'description' => 'Aquí podrá configurar todos los aspectos generales del theme',
        ),
        'settingsID' => '',
        'settingFields' => array(),

        'tabs' => array(
            'general' => array(
                'text' => 'Configuración General', 
                'dashicon' => 'dashicons-admin-generic',
                'tabFields' => array(
                    array(
                        'type' => 'file', 
                        'label' => 'Logo del blog', 
                        'name' => 'logo-001',
                        'class' => '',
                        'preview' => false,
                        'description' => ''
                    ),
                    array(
                        'type' => 'file', 
                        'label' => 'Logo Home', 
                        'name' => 'logo-002',
                        'class' => '',
                        'preview' => false,
                        'description' => ''
                    ),
                ),
            ),
            'home' => array(
                'text' => 'Portada', 
                'dashicon' => 'dashicons-admin-generic',
                'tabFields' => array(),
                'sections' => array(
                    'sservicios' => array(
                        'text' => 'Header', 
                        'tabFields' => array(
                            array(
                                'type' => 'file', 
                                'label' => 'Video', 
                                'name' => 'sf-100',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título Principal',
                                'name' => 'sf-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => 'sf-102' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            
                        ), 
                    ),
                    'slinks' => array(
                        'text' => 'Bloques Principales', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título 01',
                                'name' => 'img-card-100' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 01',
                                'name' => 'img-card-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 01', 
                                'name' => 'img-card-102',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 02',
                                'name' => 'img-card-103' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 02',
                                'name' => 'img-card-104' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 02', 
                                'name' => 'img-card-105',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 03',
                                'name' => 'img-card-106' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 03',
                                'name' => 'img-card-107' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 03', 
                                'name' => 'img-card-108',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                        ), 
                    ),
                    'servicetexts' => array(
                        'text' => 'Bloques de Texto', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título', 
                                'name' => 'service-text-Title',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción', 
                                'name' => 'service-text-desc',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 01', 
                                'name' => 'service-text-100',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 01',
                                'name' => 'service-text-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 01',
                                'name' => 'service-text-102' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 01',
                                'name' => 'service-text-103' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),

                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 02', 
                                'name' => 'service-text-104',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 02',
                                'name' => 'service-text-105' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 02',
                                'name' => 'service-text-106' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 02',
                                'name' => 'service-text-107' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 03', 
                                'name' => 'service-text-108',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 03',
                                'name' => 'service-text-109' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 03',
                                'name' => 'service-text-110' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 03',
                                'name' => 'service-text-111' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 04', 
                                'name' => 'service-text-112',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 04',
                                'name' => 'service-text-113' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 04',
                                'name' => 'service-text-114' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 04',
                                'name' => 'service-text-115' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 05', 
                                'name' => 'service-text-116',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 05',
                                'name' => 'service-text-117' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 05',
                                'name' => 'service-text-118' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 05',
                                'name' => 'service-text-119' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 06', 
                                'name' => 'service-text-120',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 06',
                                'name' => 'service-text-121' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 06',
                                'name' => 'service-text-122' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 06',
                                'name' => 'service-text-123' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 07', 
                                'name' => 'service-text-124',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 07',
                                'name' => 'service-text-125' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 07',
                                'name' => 'service-text-126' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 07',
                                'name' => 'service-text-127' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 08', 
                                'name' => 'service-text-128',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 08',
                                'name' => 'service-text-129' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 08',
                                'name' => 'service-text-130' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 08',
                                'name' => 'service-text-131' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 09', 
                                'name' => 'service-text-132',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 09',
                                'name' => 'service-text-133' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 09',
                                'name' => 'service-text-134' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 09',
                                'name' => 'service-text-135' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 10', 
                                'name' => 'service-text-136',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 10',
                                'name' => 'service-text-137' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 10',
                                'name' => 'service-text-138' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 10',
                                'name' => 'service-text-139' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 11', 
                                'name' => 'service-text-140',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 11',
                                'name' => 'service-text-141' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 11',
                                'name' => 'service-text-142' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 11',
                                'name' => 'service-text-143' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            // Bloque

                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 12', 
                                'name' => 'service-text-144',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 12',
                                'name' => 'service-text-145' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 12',
                                'name' => 'service-text-146' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL 12',
                                'name' => 'service-text-147' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            
                        ), 
                    ),
                    
                    'sclientes' => array(
                        'text' => 'Seccion clientes', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título Principal',
                                'name' => 'client-100' ,
                                'class' => '',
                                'description' => 'Ej. Somos partner oficiales de',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => 'client-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Logo cliente 01', 
                                'name' => 'client-102',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Logo cliente Destacado 02', 
                                'name' => 'client-103',
                                'class' => '',
                                'preview' => false,
                                'description' => 'Este cliente muestra video y texto'
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Logo cliente 03', 
                                'name' => 'client-104',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Logo cliente 04', 
                                'name' => 'client-105',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Texto Cliene Destacado',
                                'name' => 'client-106' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'ID del video Destacado',
                                'name' => 'client-107' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            
                        ), 
                    ),
                    'spartner' => array(
                        'text' => 'Seccion partner', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título Principal',
                                'name' => '' ,
                                'class' => '',
                                'description' => 'Ej. Somos partner oficiales de',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Logo del partner 01', 
                                'name' => '',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Partner 01',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 01',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Enlace 01',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Logo del partner 02', 
                                'name' => '',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Partner 02',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 02',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Enlace 02',
                                'name' => '' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                        ), 
                    ),
                ),
              ),
            'Contacto' => array(
                'text' => 'Contacto', 
                'dashicon' => 'dashicons-email-alt',
                'tabFields' => array(),
                'sections' => array(

                    'info' => array(
                        'text' => 'Info de contacto', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título principal',
                                'name' => 'contact-info-title' ,
                                'class' => '',
                                'description' => 'Título principal para mostrar en la página',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => 'contact-info-desc' ,
                                'class' => '',
                                'description' => 'Breve descripción para la página',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Email',
                                'name' => 'contact-info-email' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Teléfono',
                                'name' => 'contact-info-tel' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Dirección',
                                'name' => 'contact-info-address' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                        ) 
                    ), // Fin de info de contacto

                    'redes' => array(
                        'text' => 'Redes Sociales', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Facebook',
                                'name' => 'rrss-fb' ,
                                'class' => '',
                                'description' => 'Usuario sin @',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Instagram',
                                'name' => 'rrss-ig' ,
                                'class' => '',
                                'description' => 'Usuario sin @',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Twitter',
                                'name' => 'rrss-tt' ,
                                'class' => '',
                                'description' => 'Usuario sin @',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Linkedin',
                                'name' => 'rrss-ld' ,
                                'class' => '',
                                'description' => 'Usuario sin @',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'YouTube',
                                'name' => 'rrss-yt' ,
                                'class' => '',
                                'description' => 'URL completa',
                                // 'tooltip' => ''
                            ),
                        ) 
                    ), // Fin redes sociales

                    'map' => array(
                        'text' => 'Google Map', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Google Map Api',
                                'name' => 'map-api' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Map: Longitud',
                                'name' => 'map-long' ,
                                'class' => '',
                                'description' => 'Ej. -3.688810',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Map: Latitud',
                                'name' => 'Map-lat' ,
                                'class' => '',
                                'description' => 'Ej. 40.420088',
                                // 'tooltip' => ''
                            ),
                        ) 
                    ),
                    
                   

                ), // Fin de sections
            ),// Fin del tab contacto
            'blog' => array(
                'text' => 'Blog', 
                'dashicon' => 'dashicons-welcome-write-blog',
                'tabFields' => array(),
                'sections' => array(
                    'recursos' => array(
                      'text' => 'Recursos', 
                      'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título principal',
                                'name' => 'blog-source-title' ,
                                'class' => '',
                                'description' => 'Título para mostrar. Ej. Guías Practicas',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Slug de la categoría',
                                'name' => 'blog-source-slug' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Cantidad de post',
                                'name' => 'blog-source-cant' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'select', 
                                'label' => 'Orden',
                                'name' => 'blog-source-order' ,
                                'options' => array(
                                    'rand' => 'Randon',
                                    'ASC' => 'Ascendente',
                                    'DESC' => 'Descendente'
                                ),
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                        ) 
                    ),
                    'post' => array(
                        'text' => 'Artículos', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Categorías',
                                'name' => 'blog-post-slug' ,
                                'class' => '',
                                'description' => 'Ej. 25,35,75',
                                // 'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Cantidad de post por categoría',
                                'name' => 'blog-post-cant' ,
                                'class' => '',
                                'description' => '',
                                // 'tooltip' => ''
                            ),
                        ) 
                    ),
                ),// Fin de sections
            ),// Fin del tab blog



        ),// Fin de los tabs

        'badge' => array()
    )
  );