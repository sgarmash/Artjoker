<?php
    $arr = [1, 2, 4, -1, -2, -3, 3, 7, 0, 0];

    function procentInArray ( $a, $b ) {
        return ( $b / 100 ) * $a * 100;
    }

    function zeroProcent ( $arr ) {
        $counter = 0;
        for ( $i = 0, $count = count( $arr ); $i < $count; $i++ ) {
            if ( $arr[$i] === 0 ) {
                $counter++;
            }
        }
        return $counter;
    }


    function negativeProcent ( $arr ) {
        $counter = 0;
        for ( $i = 0, $count = count( $arr ); $i < $count; $i++ ) {
            if ( $arr[$i] < 0 ) {
                $counter++;
            }
        }
        return $counter;
    }

    function positiveProcent ( $arr ) {
        $counter = 0;
        for ( $i = 0, $count = count( $arr ); $i < $count; $i++ ) {
            if ( $arr[$i] > 0 ) {
                $counter++;
            }
        }
        return $counter;
    }

    function is_prime( $n ) {
        for( $x = 2; $x < $n; $x++ ){
            if( $n % $x == 0 ) {
                return true;
            }
        }
        return false;    
    }

    function primeProcent ( $arr ) {
        $counter = 0;
        for ( $i = 0, $count = count( $arr ); $i < $count; $i++ ) {
            if (is_prime($arr[$i]) ) {
                $counter++;
            }
        }
        return $counter;
    }

 echo 
    '<pre>'; 
        print_r(procentInArray( count($arr), primeProcent($arr)));
    '</pre>';