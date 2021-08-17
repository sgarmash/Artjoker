<?php
$matrixA = [
    [1, 5, 6, 8],
    [4, 5, 7, 11]
 ];

 $matrixB = [
    [1, 1, 1, 1],
    [1, 1, 1, 1]
 ];

 function sumMatrix( $matrixFirst, $matrixLast ) {   
    $row = count($matrixFirst[0]); 
    $result = [];
    for ($i = 0, $counter = count($matrixFirst); $i < $counter; $i++) {
        $result[$i] = [];
        for ($j = 0; $j < $row; $j++) {
            $result[$i][$j] = $matrixFirst[$i][$j] + $matrixLast[$i][$j];
        }
    }
    return $result;
}

 echo 
    '<pre>'; 
        print_r(sumMatrix( $matrixA, $matrixB ));
    '</pre>';