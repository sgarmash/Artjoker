<?php
$matrix = [
    [1, 5],
    [4, 8]
 ];

 function transposeMatrix( $matrix ) {   
    $result = [];
    for ( $i = 0, $count = count($matrix); $i < $count; $i++) { 
        for ( $j = 0, $count = count( $matrix[$i] ); $j < $count; $j++ ) {
            $result[$i][$j] = $matrix[$j][$i];
        }
    }
    return $result;
}

 echo 
    '<pre>'; 
        print_r(transposeMatrix( $matrix ));
    '</pre>';