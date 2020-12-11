<?php 




// Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

//Carregando nossos scripts e folhas de estilos
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery'), '4.5.3', true );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '4.5.3', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() .'/css/template.css', array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

//titulo 
if(!function_exists('wp_render_title_tag')){
    function pc_render_title() {
        ?> <title><?php wp_title('|', true, 'right' );?> <?php bloginfo('name'); ?> </title> <?php
    }
    add_action('wp_head', 'pc_render_title');
}
//Função de Configuração do Tema
function wp_curso_config(){
    require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';

    //Suporte para logotipo
    add_theme_support('title-tag');
    //Suporte para logotipo
    add_theme_support( 'custom-logo' );
    //Ewgustrando os menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu'
        )
    );

    $args = array(
        'height' => 225,
         'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array ('video', 'image') );

}

add_action('after_setup_theme','wp_curso_config',0);

function wpcurso_sidebars(){
    register_sidebar(
        array(
           'name' => 'Home Page Sidebar',
           'id' => 'sidebar-1',
           'description' => 'Sidebar to be used on Home Page', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div> ',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
    register_sidebar(
            array(
               'name' => 'Blog Sidebar',
               'id' => 'sidebar-2',
               'description' => 'Sidebar to be used on Blog Page', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
                )
            );
     //Sub-title 1
     register_sidebar(
        array(
           'name' => 'Sub-title Section 1',
           'id' => 'sub-title-section-1',
           'description' => 'First title section', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div> ',
            'before_title' => '<h4 class="widget-sub-title">',
            'after_title' => '</h4>'
            )
        );
    //Title 1
    register_sidebar(
        array(
           'name' => 'Title Section 1',
           'id' => 'title-section-1',
           'description' => 'First title section', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div> ',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
    //Serviços
    register_sidebar(
            array(
               'name' => 'Services 1',
               'id' => 'services-1',
               'description' => 'First Services Area.', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
                )
            );
    register_sidebar(
            array(
               'name' => 'Services 2',
               'id' => 'services-2',
               'description' => 'Second Services Area.', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
                )
            );
   //Sub-title 2
   register_sidebar(
    array(
       'name' => 'Sub-title Section 2',
       'id' => 'sub-title-section-2',
       'description' => 'second sub-title section', 
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div> ',
        'before_title' => '<h4 class="widget-sub-title">',
        'after_title' => '</h4>'
        )
    );
    //Title 2
    register_sidebar(
        array(
        'name' => 'Title Section 2',
        'id' => 'title-section-2',
        'description' => 'First title section', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div> ',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
    //Destaques
    register_sidebar(
            array(
               'name' => 'featured',
               'id' => 'featured-1',
               'description' => 'First Featured Area.', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
                )
            );
    register_sidebar(
            array(
               'name' => 'featured 2',
               'id' => 'featured-2',
               'description' => 'Second Featured Area.', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
                )
            );
     register_sidebar(
            array(
               'name' => 'featured 3',
               'id' => 'featured-3',
               'description' => 'Third Featured Area.', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
                )
            );
    register_sidebar(
            array(
               'name' => 'featured 4',
               'id' => 'featured-4',
               'description' => 'Four Featured Area.', 
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div> ',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
                )
            );
    
    //social 
    register_sidebar(
        array(
           'name' => 'Social Media Icons top',
           'id' => 'social-media',
           'description' => 'Place your media here.', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div> ',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
            )
        );
    
        
}
add_action( 'widgets_init' , 'wpcurso_sidebars' );

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );