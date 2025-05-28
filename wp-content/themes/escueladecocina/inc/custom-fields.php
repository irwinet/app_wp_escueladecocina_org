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

/* Metaboxes para Iconos */
add_action( 'cmb2_admin_init', 'edc_seccion_nosotros' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_seccion_nosotros() {
	$prefix = 'edc_group_';

	/**
	 * Repeatable Field Groups
	 */
	$edc_iconos = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Iconos con Descripción', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'	   => 'normal',
		'priority'	   => 'high',
		'show_names'   => 'true',
		'show_on'	   => array(
			'key'   => 'page-template',
			'value' => 'page-iconos.php'
		),
	) );

	$edc_iconos->add_field( array(
		'name' => esc_html__( 'Titulo Sección', 'cmb2' ),
		'desc' => esc_html__( 'Añada un titulo para la sección', 'cmb2' ),
		'id'   => $prefix . 'titulo_iconos',
		'type' => 'text',
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $edc_iconos->add_field( array(
		'id'          => $prefix . 'nosotros',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue opciones según sea necesario', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Característica {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar Otro Grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$edc_iconos->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'titulo_icono',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Descripción', 'cmb2' ),
		'description' => esc_html__( 'Agregue una descripción a esta característica', 'cmb2' ),
		'id'          => 'desc_icono',
		'type'        => 'textarea_small',
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icono', 'cmb2' ),
		'id'   => 'imagen_icono',
		'type' => 'file',
	) );

}


/* Metaboxes para el Blog */
add_action( 'cmb2_admin_init', 'edc_campos_blog' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_blog() {
	$prefix = 'edc_blog_';
	$id_blog = get_option('page_for_posts');

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$edc_campos_blog = new_cmb2_box( array(
		'id'           => $prefix . 'blog',
		'title'        => esc_html__( 'Campos Blog', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_blog ),
		), // Specific post IDs to display this metabox
	) );

	$edc_campos_blog->add_field( array(
		'name' => esc_html__( 'Slogan Blog', 'cmb2' ),
		'desc' => esc_html__( 'Añada una descripción a la página web', 'cmb2' ),
		'id'   => $prefix . 'slogn_blog',
		'type' => 'text',
	) );
}

?>