<?php

    function toDegree( int $number, int $degree ) {
        if ( $degree === 1 ) {
            return $number;
        } 
        return $number * f($number, $degree - 1);   
    }
    
    print_r(toDegree( 2, 7 )); 
?>