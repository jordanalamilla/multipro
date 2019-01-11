$(() => {

    // MOBILE NAV BUTTON
    $( '#mobile-nav-button' ).on( 'click', function() {
        $( 'nav' ).toggle( 200 );
    });

    // RESTRICT LENGTH OF BLOG POST PREVIEW TO 150 CHARACTERS
    $( '.blog .post-content' ).text( function( index, currentText ) {

        if( currentText.length > 150 )
            return currentText.substring( 0, 150 ) + '...';
    });

});