<?php

// Custom Post Book
function lantern_books() {

	$labels = array(
	'name' => _x('Books', 'plural'),
	'singular_name' => _x('Book', 'singular'),
	'menu_name' => _x('Books', 'admin menu'),
	'name_admin_bar' => _x('Book', 'admin bar'),
	'add_new' => _x('Add New ', 'add new'),
	'add_new_item' => __('Add New Book'),
	'new_item' => __('New Book'),
	'edit_item' => __('Edit Book'),
	'view_item' => __('View Book'),
	'all_items' => __('All Books'),
	'search_items' => __('Search Books'),
	'not_found' => __('No Book found.'),
	);

	$args = array(
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'post-formats'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book-alt',
		'menu_position' => 5,
		'public' => true,
		'query_var' => true,
		//'rewrite' => true,
		'rewrite' => array('slug' => 'book'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true
	);
	register_post_type('books', $args);
}
add_action('init', 'lantern_books');

// Taxonomies for book post book Type
function lantern_book_taxonomies() {

	$labels = array(
		'name'              => _x( 'Book Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Book Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search book Categories' ),
		'all_items'         => __( 'All book Categories' ),
		'parent_item'       => __( 'Parent book Category'),
		'parent_item_colon' => __( 'Parent book Category:'),
		'edit_item'         => __( 'Edit book Category' ),
		'update_item'       => __( 'Update book Category' ),
		'add_new_item'      => __( 'Add New book Category' ),
		'new_item_name'     => __( 'New book Category Name' ),
		'menu_name'         => __( 'Book Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'book-category' ),
	);

	register_taxonomy( 'book_category', array( 'books' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
$labels = array(
	'name'                       => _x( 'Book Tags', 'taxonomy general name'),
	'singular_name'              => _x( 'Book Tag', 'taxonomy singular name'),
	'search_items'               => __( 'Search book Tags'),
	'popular_items'              => __( 'Popular book Tags'),
	'all_items'                  => __( 'All book Tags'),
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  => __( 'Edit book Tags' ),
	'update_item'                => __( 'Update book Tag'),
	'add_new_item'               => __( 'Add New book Tag'),
	'new_item_name'              => __( 'New book Tag'),
	'separate_items_with_commas' => __( 'Separate book tags with commas'),
	'add_or_remove_items'        => __( 'Add or remove book tags'),
	'choose_from_most_used'      => __( 'Choose from the most used book tags'),
	'not_found'                  => __( 'No book tags found.'),
	'menu_name'                  => __( 'Book Tags'),
);

$args = array(
	'hierarchical'          => false,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	'update_count_callback' => '_update_post_term_count',
	'query_var'             => true,
	'rewrite'               => array( 'slug' => 'book-tag' ),
);

register_taxonomy( 'book_tag', array('books'), $args );

}

add_action( 'init', 'lantern_book_taxonomies');