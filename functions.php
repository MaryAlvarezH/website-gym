<!-- Funciones personalizadas disponibles en todo el tema, preferentemente acompañadas de un prefijo  -->

<?php

    //WHEN THEME IS ACTIVATED
    function gymfitness_setup() {
        // enable featured images
        add_theme_support('post-thumbnails');

    }
    add_action( 'after_setup_theme', 'gymfitness_setup' );


    // NAVIGATION MENUS
    function gymfitness_menus(){
        $locations = array(
            'menu_principal' => __('Menu Principal', 'gymfitness'),

        );
        register_nav_menus( $locations );
    }

    add_action( 'init', 'gymfitness_menus' );
    /* si uso __ significa que el texto se puede traducir
    hooks funciones que corren en determninado tiempo y lugar
    init -> la unción se ejecutará cuando wordpress se inicialice
    Se pueden agregar más menus utilizando el arreglo */

    // SCRIPS AND STYLES
    function gymfitness_scripts_styles() {
        // hoja de estilos principal
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
        wp_enqueue_style( 'slicknavCSS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array(), '1.0.10' );
        wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0' );
        wp_enqueue_script('slickJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', $true);
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slickJS'), '1.0.0', $true);

    }
    add_action( 'wp_enqueue_scripts', 'gymfitness_scripts_styles' );

    /* cargar hojas de estilos en la parte frontal del sitio web:
    este hook esta almacenado dentro de otra función de wordPress wp_head
    por lo que es importante mandarla a llamar desde el head de nuestro .html
    get_stylesheet_uri() para obtener la uri de la hoja de estilos principal 
    el tercer parametro recibe un arreglo de dependencias que necesitan cargarse antes */
?>:
