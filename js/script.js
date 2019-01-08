$(() => {

    // ENSURE NAV IS VISIBLE WHEN NOT MOBILE
    if( window.innerWidth > 750 ) $( 'nav' ).show();

    // MOBILE NAV BUTTON
    $( '#mobile-nav-button' ).on( 'click', function() {
        $( 'nav' ).toggle( 200 );
    });

    // RESTRICT LENGTH OF BLOG POST PREVIEW TO 150 CHARACTERS
    $( '.blog .post-content' ).text( function( index, currentText ) {

        if( currentText.length > 150 )
            return currentText.substring( 0, 150 ) + '...';
    });

    // ALL SORT BUTTONS
    const buttons = [
        $( '#sort-web' ),
        $( '#sort-art' ),
        $( '#sort-blog' ),
        $( '#sort-all' ),
    ];

    // LAST POST TYPE CLICKED
    let currentTypeSelected = 0;

    // ON POST TYPE BUTTON CLICK
    $( '.button' ).on( 'click', function() {

        // DURATION OF FADES
        const time = 100;

        // POST TYPE OF BUTTON CLICKED
        let type = $( this ).attr( 'data-type' );

        // IF THE SAME POST TYPE WASN'T CLICKED AGAIN
        if( currentTypeSelected !== type ) {

            // IF CURRENT POST TYPE IS ANYTHING BUT 'ALL'
            if(
                currentTypeSelected === 'web' ||
                currentTypeSelected === 'art' ||
                currentTypeSelected === 'blog'
            ) {
                // HIDE THE ONE CURRENT POST TYPE
                $( '.' + currentTypeSelected ).fadeOut(time);

            } else {

                // HIDE ALL POST TYPES
                buttons.forEach( function( button ) {

                    let type = $( button ).attr( 'data-type' );
                    $( '.' + type ).fadeOut(time);
                });
            }

            // SHOW ONLY POST TYPE SELECTED
            currentTypeSelected = type;

            if( type === 'all' ) {

                // IF USER SELECTS 'ALL', SHOW ALL POST TYPES
                buttons.forEach( function( button ) {

                    let type = $( button ).attr( 'data-type' );
                    $( '.' + type ).delay(time).fadeIn(time);
                });

            } else {

                //SHOW ONLY POST TYPE SELECTED
                $( '.' + type ).delay(time).fadeIn(time);
            }

            // CHANGE COLOUR OF SELECTED POST TYPE
            changeColour( this );
        }
    });

    // CHANGE COLOUR OF SELECTED POST TYPE
    const changeColour = ( button ) => {

        // CHANGE ALL FORMER SELECTED TYPES TO WHITE
        buttons.forEach( function( b ) {
            $( b ).css({
                'color' : '#000'
            });
        });

        // CHANGE SELECTED TYPE TO GREY
        $( button ).css({
            'color' : '#F00'
        });
    }

});