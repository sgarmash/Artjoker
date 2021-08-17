<?php

    function numberFibonacci ( int $number ) {
        $a = 1;
        $b = 1;
        for( $i = 3; $i <= $number; $i++ ) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $b;
    }

    print_r( numberFibonacci( 7 ) );

?>