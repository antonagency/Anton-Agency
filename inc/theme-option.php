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
                    'sfeature' => array(
                      'text' => 'Seccion destacada', 
                      'tabFields' => array() 
                    ),
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
                        'text' => 'Seccion Tabs', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título 01',
                                'name' => 'tabs-100' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 01',
                                'name' => 'tabs-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 01', 
                                'name' => 'tabs-102',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 02',
                                'name' => 'tabs-103' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 02',
                                'name' => 'tabs-104' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 02', 
                                'name' => 'tabs-105',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 03',
                                'name' => 'tabs-106' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 03',
                                'name' => 'tabs-107' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 03', 
                                'name' => 'tabs-108',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título 04',
                                'name' => 'tabs-109' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción 04',
                                'name' => 'tabs-110' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen 04', 
                                'name' => 'tabs-111',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                        ), 
                    ),
                    'svideo' => array(
                        'text' => 'Seccion video', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'URL del video',
                                'name' => 'svideo-100' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título principal',
                                'name' => 'svideo-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => 'svideo-102' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Texto del botón',
                                'name' => 'svideo-103' ,
                                'class' => '',
                                'description' => 'Ej. Ver todos los artículos',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL del botón',
                                'name' => 'svideo-104' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                        ), 
                    ),
                    'sblog' => array(
                        'text' => 'Seccion blog', 
                        'tabFields' => array(
                            array(
                                'type' => 'text', 
                                'label' => 'Título principal',
                                'name' => 'sb-100' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => 'sb-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Cantidad a mostrar',
                                'name' => 'sb-102' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Texto del botón',
                                'name' => 'sb-103' ,
                                'class' => '',
                                'description' => 'Ej. Ver todos los artículos',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL del botón',
                                'name' => 'sb-104' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                        ), 
                    ),
                    'sfeaturedos' => array(
                        'text' => 'Seccion destacada azul', 
                        'tabFields' => array(
                            array(
                                'type' => 'file', 
                                'label' => 'Imagen destacada', 
                                'name' => 'sa-100',
                                'class' => '',
                                'preview' => false,
                                'description' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Texto pequeño',
                                'name' => 'sa-101' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Título principal',
                                'name' => 'sa-102' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Descripción',
                                'name' => 'sa-103' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'Texto del botón',
                                'name' => 'sa-104' ,
                                'class' => '',
                                'description' => '',
                                //'tooltip' => ''
                            ),
                            array(
                                'type' => 'text', 
                                'label' => 'URL del botón',
                                'name' => 'sa-105' ,
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