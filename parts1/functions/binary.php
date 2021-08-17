<?php

    function binaryConvector ( $number ) {

        $result = null;

        while ( $number )
            { 
                $result .= $number % 2; 
                /*
                    Functions Round Returns the
                    rounded value with the specified precision

                */  

                /*
        
                    Constants PHP_ROUND_HALF_DOWN
                    Rounds value down towards zero to 
                    precision of decimal places
                
                */
                $number = round( $number/2, 0, PHP_ROUND_HALF_DOWN ); 
            }
            // Strrev returns string, flipped backwards.
        return strrev($result);
    }
    
    function binaryTodecimal( $number ) {
        /*
        
            str_split - Converts a string to an array

        */
        $number = str_split($number);

        /*
        
           array_reverse - Returns an array with elements in reverse order

        */

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