<?php

    function numberFibonacci ( int $number ) {
        if ( $number <= 1 ) {
            return $number;
        } 
        return numberFibonacci( $number - 1 ) + numberFibonacci( $number - 2 );
    }

    print_r(numberFibonacci(7));
    
?>