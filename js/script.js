$(document).ready(function() {
    var controller = new slidebars();
    controller.init();
    $( '.js-toggle-main-menu' ).on( 'click', function ( event ) {
        event.preventDefault();
        event.stopPropagation();
        controller.toggle( 'sitemenu' );
    });
    $( controller.events ).on( 'opening', function ( event ) {
		$( '[canvas]' ).addClass( 'js-close-any' );
	} );
	$( document ).on( 'click', '.js-close-any', function ( event ) {
		if ( controller.getActiveSlidebar() ) {
			event.preventDefault();
			event.stopPropagation();
			controller.close();
		}
	} );
	 $( '.js-close-main-menu' ).on( 'click', function ( event ) {
		event.preventDefault();
		event.stopPropagation();
		controller.close('sitemenu');
	} );
});