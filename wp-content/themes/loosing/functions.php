<?php 

    // añadir soporte para...
    add_theme_support ( 'post-thumbnails' );
    add_theme_support ( 'title-tag' );

    // Eliminar basura de tamaño de imgs que no necesito
    
    remove_image_size ('medium_large');
    remove_image_size ('1536x1536');
    remove_image_size ('2048x2048');
    
    // Registro de menús
    
    register_nav_menu ( 'top', 'Menú cabecera' );
    register_nav_menu ( 'footer-left', 'Menú pie de página: Izquierda' );
    register_nav_menu ( 'footer-right', 'Menú pie de página: Derecha' );

    // Registro de sidebars

    register_sidebar ( array
    (
        'id' => 'post-sidebar',
        'name' => 'Sidebar de las entradas',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));

    register_sidebar ( array
    (
        'id' => 'page-sidebar',
        'name' => 'Sidebar de las páginas',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));
    
    // No usar estilos de gutenberg
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
       } 
    add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
?>