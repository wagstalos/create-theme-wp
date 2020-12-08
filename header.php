<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Page Compliance</title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-sm-7 col-6">Icones socias  </div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-right">pesquisa</div>
                </div>
            </div>
           
        </section>
        <section class="menu-area shadow-sm mb-2 bg-white">
            <div class="container">
            <!-- nav php -->
            <nav class="navbar navbar-expand-md stroke">
                <a href="#" class="navbar-brand logo">

                    <?php 
                        $pc_custom_logo = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src(  $pc_custom_logo, 'full');

                        if(has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="Imagem de uma cidade com um prédio grande no centro">';
                        }else{
                            echo '<h5 class="m-0" >' . get_bloginfo('name') . '</h5>';
                        }   
                    ?>
                
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                    <div class="icon">
                        <div class="hamburguer">

                        </div>
                    </div>
                </button>
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'my_main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'menu',
                        'menu_class'        => 'nav navbar-nav ml-auto text-light',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
            </nav>
            </div>

        </section>
    </header>