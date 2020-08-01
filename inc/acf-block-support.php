<?php

/*

@package Lantern

	=====================
	ACF BLOCK SUPPORT
	=====================
*/

function register_acf_block_types() {

    // register a standard hero block
    acf_register_block_type(array(
        'name'              => 'two_column',
        'title'             => __('Two column block'),
        'description'       => __('The block has text on the left and an image on the right with a section title above which is underlined.'),
        'render_template'   => 'template-parts/blocks/two_column/two_column.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'lantern-two-column', get_template_directory_uri() . '/template-parts/blocks/two_column/two_column.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'auto',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#00A1ED',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'Lantern', 'Two columns' ),
        
    ));

}
