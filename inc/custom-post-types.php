<?php

// Custom Post Books
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
		'rewrite' => true,
		'rewrite' => array('slug' => 'books'),
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

// Custom Post Authors
function lantern_book_authors() {

	$labels = array(
	'name' => _x('Book Authors', 'plural'),
	'singular_name' => _x('Book Author', 'singular'),
	'menu_name' => _x('Book Authors', 'admin menu'),
	'name_admin_bar' => _x('Book Author', 'admin bar'),
	'add_new' => _x('Add New ', 'add new'),
	'add_new_item' => __('Add New Book Author'),
	'new_item' => __('New Book Author'),
	'edit_item' => __('Edit Book Author'),
	'view_item' => __('View Book Author'),
	'all_items' => __('All Book Authors'),
	'search_items' => __('Search Book Authors'),
	'not_found' => __('No Book Author found.'),
	);

	$args = array(
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'post-formats'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'menu_position' => 5,
		'public' => true,
		'query_var' => true,
		'rewrite' => true,
		'rewrite' => array('slug' => 'book-authors'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true
	);
	register_post_type('book-authors', $args);
}
add_action('init', 'lantern_book_authors');

// Taxonomies for book post book Type
function lantern_book_author_taxonomies() {

	$labels = array(
		'name'              => _x( 'Author Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Author Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Author Categories' ),
		'all_items'         => __( 'All Author Categories' ),
		'parent_item'       => __( 'Parent Author Category'),
		'parent_item_colon' => __( 'Parent Author Category:'),
		'edit_item'         => __( 'Edit Author Category' ),
		'update_item'       => __( 'Update Author Category' ),
		'add_new_item'      => __( 'Add New Author Category' ),
		'new_item_name'     => __( 'New Author Category Name' ),
		'menu_name'         => __( 'Author Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'			=> true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'author-category' ),
	);

	register_taxonomy( 'author_category', array( 'book-authors' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
$labels = array(
	'name'                       => _x( 'Author Tags', 'taxonomy general name'),
	'singular_name'              => _x( 'Author Tag', 'taxonomy singular name'),
	'search_items'               => __( 'Search Author Tags'),
	'popular_items'              => __( 'Popular Author Tags'),
	'all_items'                  => __( 'All Author Tags'),
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  => __( 'Edit Author Tags' ),
	'update_item'                => __( 'Update Author Tag'),
	'add_new_item'               => __( 'Add New Author Tag'),
	'new_item_name'              => __( 'New Author Tag'),
	'separate_items_with_commas' => __( 'Separate author tags with commas'),
	'add_or_remove_items'        => __( 'Add or remove author tags'),
	'choose_from_most_used'      => __( 'Choose from the most used author tags'),
	'not_found'                  => __( 'No author tags found.'),
	'menu_name'                  => __( 'Author Tags'),
);

$args = array(
	'hierarchical'          => false,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	'update_count_callback' => '_update_post_term_count',
	'query_var'             => true,
	'rewrite'               => array( 'slug' => 'author-tag' ),
);

register_taxonomy( 'author_tag', array('book-authors'), $args );

}

add_action( 'init', 'lantern_book_author_taxonomies');