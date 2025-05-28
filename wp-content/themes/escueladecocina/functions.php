<?php

/* Agregar CMB2 */
require_once dirname(__FILE__) . '/cmb2.php';

/* Carga campos personalizados */
require_once dirname(__FILE__) . '/inc/custom-fields.php';

/* Imagenes Destacadas Para Pagina */
add_action('init', 'edc_imagen_destacada');
function edc_imagen_destacada($id){
    $imagen = get_the_post_thumbnail_url($id, 'full');
    $html = '';
    $clase = false;
    if($imagen){
        $clase= true;
        $html .= '<div class="container">';
        $html .= '  <div class="row imagen-destacada"></div>';
        $html .= "</div>";

        // Agregar estilos lineamientos
        wp_register_style('custom', false);
        wp_enqueue_style('custom');

        // Creamos el css para el custom
        $imagen_destacada_css ="
            .imagen-destacada {
                background-image: url({$imagen});
            }
        ";

        wp_add_inline_style('custom', $imagen_destacada_css);
    }
    return array($html, $clase);
}

/*
    Funciones que se cargan al activar el tema
*/

function edc_setup() {
    
    // Definir tamaño de imagenes
    add_image_size('mediano', 510, 340, true);

    // Imagen destacada
    add_theme_support('post-thumbnails');
    
    // Menu de nagevacion: Menu Header, Menu Footer, Redes Sociales
    register_nav_menus(array(
        'menu_principal' => esc_html__('Menu Principal', 'escuelacocina')
    ));
}

add_action('after_setup_theme', 'edc_setup'); // Para agregar menu de navegacion y otras cosas

/* Agrega clase nav-link de bootstrap al menu principal */
function edc_enlace_class($atts, $item, $args){
    if($args->theme_location == 'menu_principal'){
        $atts['class'] = 'nav-link'; // tag: a
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'edc_enlace_class', 10, 3); // Para agregar un filtro a los items del Menu

/*
    Carga los Scripts y CSS del theme
*/

function edc_scripts() {
    /* Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', false, '4.1.3');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));

    /* Javascript */
    // wp_enqueue_script('jquery', get_template_directory_uri().'js/jquery.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('popper'), '1.0', true);
}

/* Hooks */
add_action('wp_enqueue_scripts', 'edc_scripts'); // Para Css y Js

/* CMB2 */
add_action('admin_init', function() {
    if (function_exists('cmb2_bootstrap')) {
        error_log('CMB2 está cargado correctamente');
    } else {
        error_log('CMB2 NO está cargado');
    }
});

?>