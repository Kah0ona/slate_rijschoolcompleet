<?php 

function custom_post_aanbieding() {
		$labels = array(
			'name'               => _x( 'Aanbiedingen', 'post type general name' ),
			'singular_name'      => _x( 'Aanbieding', 'post type singular name' ),
			'add_new'            => _x( 'Nieuwe aanbieding', 'book' ),
			'add_new_item'       => __( 'Voeg nieuwe aanbieding toe' ),
			'edit_item'          => __( 'Bewerk aanbieding' ),
			'new_item'           => __( 'Nieuw Aanbieding' ),
			'all_items'          => __( 'All aanbiedingen' ),
			'view_item'          => __( 'Bekijk aanbiedingen' ),
			'search_items'       => __( 'Zoek aanbiedingen' ),
			'not_found'          => __( 'No products found' ),
			'not_found_in_trash' => __( 'No products found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Aanbiedingen'
		);

		$args = array(
			'labels'        => $labels,
			'description'   => 'Aanbiedingen kunnen hier worden toegevoegd.',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'aanbieding', $args );	


}

add_action( 'init', 'custom_post_aanbieding' );





?>
