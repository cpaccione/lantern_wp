
wp.domReady( () => {

	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'max-width-1200',
		label: 'Max-width of 1200px',
	} );
	
	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'max-width-650',
		label: 'Max-width 650px',
    } );

    wp.blocks.registerBlockStyle( 'core/paragraph', {
		name: 'max-width-1200',
		label: 'Max-width 1200px',
	} );

	wp.blocks.registerBlockStyle( 'core/paragraph', {
		name: 'max-width-650',
		label: 'Max-width 650px',
	} );
	
    wp.blocks.registerBlockStyle( 'core/columns', {
		name: 'max-width-1200',
		label: 'Max-width of 1200px',
	} );
	
	wp.blocks.registerBlockStyle( 'core/columns', {
		name: '1200-yellow',
		label: '1200px yellow circle graphic',
    } );


} );