( function( $ ) {

	$(document).ready(function($){
		
		$('#btn-mode').on('click', function() {
			$('body').toggleClass('dark-mode');
		});
			
		var mode = Cookies.get( 'theme_mode' );

		if ( ! mode ) {
			Cookies.set( 'theme_mode' , 'light' );
		}

		$('#btn-mode').on('click',function(e){
			e.preventDefault();
			var cur_mode = Cookies.get( 'theme_mode' );
			if ( 'light' == cur_mode ) {
				// Switch to dark.
				Cookies.set( 'theme_mode' , 'dark' );
				$( "#boxstyle-scheme-css" ).attr( "href", boxstyleObject.template_directory_uri + "/dark.css" );
			}
			else if ( 'dark' == cur_mode ) {
				// Switch to light.
				Cookies.set( 'theme_mode' , 'light' );
				$( "#boxstyle-scheme-css" ).attr( "href", boxstyleObject.template_directory_uri + "/light.css" );
			}
		});

	});

} )( jQuery );