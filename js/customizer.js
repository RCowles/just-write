/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
	// Sidebar background color.
	wp.customize( 'just_write_sidebar_color', function( value ) {
		value.bind( function( to ) {
			$( 'a.sidebar-toggle.open, #secondary' ).css( 'background-color', to );
		} );
	} );
	// Link color.
	wp.customize( 'just_write_link_color', function( value ) {
		value.bind( function( to ) {
			$( '#page a, #page a:visited, #page a:active, .sticky .entry-title:after' ).css( 'color', to );
		} );
	} );
} )( jQuery );
