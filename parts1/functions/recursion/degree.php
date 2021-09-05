<?php

    function toDegree(  $number,  $degree ) {
        if ( $degree === 1 ) {
            return $number;
        } 
        return $number * toDegree( $number, $degree - 1 );    
    }

    print_r( toDegree( 2, 7 ) );

?>