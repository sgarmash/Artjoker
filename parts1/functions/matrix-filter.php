<?php
    $arrayA = [
        [1, 1, 1, 0],
        [2, 3, 5, 0],
        [-1, -2, -3, -4]
    ];

    $arrayB = [
        [1, 5, 6, 1],
        [1, 5, 6, 1],
        [1, 0, 6, 1],
        [0, 2, -46, 4]
    ];
    
    function filterMatrix( $array ){
        $result = [];

        for($i = 0, $count = count($array); $i < $count; $i++){
            $sum = 0;
            for( $j = 0, $countJ = count($array[$i]); $j < $countJ; $j++ ) {
                if($array[$i][$j] === 0 ) {
                    break;
                } 
                $sum += $array[$i][$j];
            }
            if($sum < 0) {
                $result[] = $array[$i];
            } 
        }

        $array = $result;
        return $array;
    }
    function removeColumn ( &$matrix, &$exception, &$count ) {
        for( $i = 0, $countException = count($exception); $i < $countException; $i++ ) {
            for($j = 0; $j < $count; $j++) {
                unset($matrix[$j][$exception[$i]]);
            }
        }
    }

    function removeIndex ( &$matrix ) {
        for($i = 0, $count = count($matrix); $i < $count; $i++){
            $matrix[$i] = array_splice($matrix[$i], 0);
        }
    }

    function filterMatrixColumn( $matrix ) {
        if( count($matrix) !== count($matrix[0]) ) {
            throw new Exception(
                'The number of rows and 
                 columns does not match. 
                 Matrix is   not correct'
            );
        }

        $exception = [];
    
        for ($i = 0, $count = count($matrix); $i < $count; $i++){
            $sum = 0;

            for ($j = 0, $countJ = count($matrix[$i]); $j < $countJ; $j++) {
                if(in_array($i, $exception)) {
                    break;
                } 
                if($matrix[$j][$i] === 0) {
                    array_push($exception, $i);
                } 
                $sum += $matrix[$j][$i];
            };

            if($sum > 0 && !in_array($i, $exception)) {
                array_push($exception, $i);
            }

        }

        removeColumn( 
            $matrix, 
            $exception, 
            $count
        );
        
        removeIndex( $matrix );
        return $matrix;
    }
    print_r(filterMatrixColumn( $arrayB ));
    echo "\n";
    print_r(filterMatrix( $arrayA ));