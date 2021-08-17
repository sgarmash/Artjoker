<?php

    function toDegree( int $number, int $degree ) {
        $sum = 1;
        for( $i = 1; $i <= $degree; $i++ ) {
            $sum = $sum * $number;  
        }
        return $sum;
    }

    function sumDegree ( $number, $degree ) {
        return ( $number ** $degree );
    }

    echo "loop";
    echo "<br />";
    print_r(toDegree( 2, 7 )); 
    echo "<br />";
    echo "Function";
    echo "<br />";
    print_r(sumDegree( 2, 7 ));

?>