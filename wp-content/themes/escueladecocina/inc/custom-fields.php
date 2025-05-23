<?php

/* Metaboxes para el Hompage */

add_action( 'cmb2_admin_init', 'edc_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_homepage() {
	$prefix = 'edc_homepage_';
	$id_home = get_option('page_on_front');

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$edc_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    // $edc_campos_homepage->add_field( array(
	// 	'name' => esc_html__( 'Un texto', 'cmb2' ),
	// 	'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
	// 	'id'   => $prefix . 'text',
	// 	'type' => 'text',
	// ) );

	// Start: Campos superior 1
	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Superior 1', 'cmb2' ),
		'desc'    => esc_html__( 'texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix . 'text_superior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 1', 'cmb2' ),
		'desc' => esc_html__( 'Primera imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix . 'imagen_superior_1',
		'type' => 'file',
	) );
	// End: Campos superior 1

	// Start: Campos superior 2
	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Superior 2', 'cmb2' ),
		'desc'    => esc_html__( 'texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix . 'text_superior_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 2', 'cmb2' ),
		'desc' => esc_html__( 'Primera imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix . 'imagen_superior_2',
		'type' => 'file',
	) );
	// End: Campos superior 2

	// Start: Campos de licenciatura
	$edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Licenciatura', 'cmb2' ),
		'desc'    => esc_html__( 'Añada el texto para la licenciatura', 'cmb2' ),
		'id'      => $prefix . 'text_licenciatura',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Fondo Licenciatura', 'cmb2' ),
		'desc' => esc_html__( 'Imagen de fondo para la sección de licenciatura', 'cmb2' ),
		'id'   => $prefix . 'imagen_licenciatura',
		'type' => 'file',
	) );
	// End: Campos de licenciatura
	
}

?>