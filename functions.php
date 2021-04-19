<?php

function miliband_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/main.css');
	wp_enqueue_script( 'code', get_template_directory_uri() . '/dist/main.js');
}

function add_field( $form_fields, $post ) {
	$field_value = get_post_meta( $post->ID, 'attribution', true );

	$form_fields['attribution'] = array(
		'value' => $field_value ? $field_value : '',
		'label' => __( 'Attribution' ),
	);

	$form_fields["attribution"]["extra_rows"] = array(
		"_none1" => "Format is <b>Name/[Site]/Source</b>",
		"_none2" => "For example, <b>Joseph Hamms/The Tribune/Getty Images",
		"_none3" => "Add additional information with extra dashes, if applicable in case of license",
	);

	return $form_fields;
}
add_filter( 'attachment_fields_to_edit', 'add_field', null, 2 );

function save_attachment( $attachment_id ) {
	if ( isset( $_REQUEST['attachments'][ $attachment_id ]['attribution'] ) ) {
		$custom_media_style = $_REQUEST['attachments'][ $attachment_id ]['attribution'];
		update_post_meta( $attachment_id, 'attribution', $custom_media_style );

	}
}
add_action( 'edit_attachment', 'save_attachment' );

function add_defer_attribute($tag, $handle, $src) {
	if ( 'miliband_scripts' !== $handle ) {
		return $tag;
	}
	$tag = '<script defer="defer" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}

add_action( 'wp_enqueue_scripts', 'miliband_scripts' );
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	if ( 'main' !== $handle )
		return $tag;
	return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );