<?php

class WebPage {

    // title - for tab title
    // subtitle - small content block
    // headline - for headline on page
    // render - main content
    // bodyclass - body css style



    function ampPage( $f3 ) {
        echo View::instance()->render( 'app/amp-layout.php' );
    }
    function ampLegalPage( $f3 ) {
        echo View::instance()->render( 'app/amp-legal.php' );
    }
    function errorPage( $f3 ) {
        echo View::instance()->render( 'app/404.php' );
    }
}
?>