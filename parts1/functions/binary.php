<?php

    function binaryConvector ( $number ) {

        $result = null;

        while ( $number )
            { 
                $result .= $number % 2; 
                $number = round( $number/2, 0, PHP_ROUND_HALF_DOWN ); 
            }
        return strrev($result);
    }
    
    function binaryTodecimal( $number ) {
        $number = str_split($number);
        $number = array_reverse($number);
        $i = 0;
        $result = 0;

        foreach($number as $values) {
            $decimal = $values * pow(2, $i);
            $result += $decimal;
            $i++;
        }
        
        return $result;
    }   

    echo "<pre>";
        print_r(binaryTodecimal(10100));
    "</pre>";

    echo "<pre>";
        print_r(binaryConvector( binaryTodecimal(10100) ));
    "</pre>";