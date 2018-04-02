(function( $ ) {

	$( document ).ready( function() {
	    formsButton();
	    formsPopup();
		formsShortcode();
	} );
	
	function formsButton() {
	    $('.formModal').click(function(e){
	       var content = $(this).attr('href');
	       $(content).fadeIn();
	       
	       e.preventDefault();
	       return false;
	    });
	}
	
	function formsPopup() {
	    
	    // Close
	    $('#modalClose').click(function(){
	       $('.customModal').fadeOut();
	    });
	}

	/**
	 * Send shortcode to editor
	 *
	 */
	function formsShortcode() {
		$( '.insertForm' ).on( 'click', function( e ) {

			var shortcode = $('#formSelect select').val();
			window.send_to_editor( '[form id="'+shortcode+'"]' );
			
			$('.customModal').fadeOut();

			e.preventDefault();
			return false;
		} );
	}

})( jQuery );