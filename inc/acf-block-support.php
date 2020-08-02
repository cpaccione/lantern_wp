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
            'background' => '#0D88C1',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'Lantern', 'Two columns' ),
        
    ));


    // register a standard hero block
    acf_register_block_type(array(
        'name'              => 'three_profile',
        'title'             => __('Three Profile Block'),
        'description'       => __('The blocks displays 3 profiles across which can be repeated to form a second row.'),
        'render_template'   => 'template-parts/blocks/profile_three/profile_three.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'lantern-three-profiles', get_template_directory_uri() . '/template-parts/blocks/profile_three/profile_three.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'edit',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#0D88C1',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
            ),
        'keywords'          => array( 'Lantern', 'Three Profiles', 'Grid', 'People' ),
        
    ));

    // register a standard hero block
    acf_register_block_type(array(
        'name'              => 'two_profile',
        'title'             => __('Two Profile Block'),
        'description'       => __('The blocks displays Two profiles in a row. They can be repeated to form a second row. The profiles are centered and closer together.'),
        'render_template'   => 'template-parts/blocks/profile_two/profile_two.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'lantern-two-profiles', get_template_directory_uri() . '/template-parts/blocks/profile_two/profile_two.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'edit',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#0D88C1',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
            ),
        'keywords'          => array( 'Lantern', 'Two Profiles', 'Grid', 'People' ),
        
    ));

    // register a standard hero block
    acf_register_block_type(array(
        'name'              => 'section_title',
        'title'             => __('Section Title'),
        'description'       => __('The blocks displays a section title with a blue underline.'),
        'render_template'   => 'template-parts/blocks/section_title/section_title.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'lantern-section-title', get_template_directory_uri() . '/template-parts/blocks/section_title/section_title.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'mode'              => 'auto',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#0D88C1',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
            ),
        'keywords'          => array( 'Lantern', 'Section', 'Title' ),
        
    ));

}
