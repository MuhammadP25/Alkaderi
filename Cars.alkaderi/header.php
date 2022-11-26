<!DOCTYPE html>
<html <?php language_attributes();?> dir="rtl">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php   wp_title('|', 'true', 'right');?>
            <?php   //bloginfo('name');  ?>
        </title>
        <link rel="pingback" href="<?php bloginfo('pingback_url')?>" />
        <!--  Fonts  -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <?php wp_head(); ?>

    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php cars_bootstrap_menu();?>
                </div>
            </div>    
        </nav>