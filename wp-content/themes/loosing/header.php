<!doctype html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000CFF">

        <title><?php wp_title ( '' ); ?></title>
        <!-- bloginfo('stylesheet_url') lleva al archivo style.css -->
        <link rel="stylesheet" href="<?php bloginfo ( 'stylesheet_url' ); ?>">

        <!-- wp_head(); siempre antes de cerrar head. Al poner function title-tag se puede borrar esto -->

    </head>

    <body <?php body_class(); ?>>

        <!-- HEADER -->

        <header class="site-header">

            <div>

                <h1>
                    <!-- bloginfo('url') te lleva a index                     -->
                    <a href="<?php echo home_url(); ?>">
                        <!-- template_url lleva a la carpeta del tema /loosing/  -->
                        <img src="<?php bloginfo ( 'template_url' ); ?>/images/logo-loosing-my-mind.svg" alt="<?php bloginfo ( 'name' ); ?>">
                    </a>                
                </h1>

                <nav>

                    <?php wp_nav_menu ( array ( 'theme_location' => 'top', 'container' => false ) ); ?>

                </nav>

            </div>

        </header>