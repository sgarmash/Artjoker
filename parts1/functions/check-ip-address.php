<?php

    function strToNumber ( string $ip ) {
        $splitSymbol = explode( '.', $ip );
        $convertToString = implode( $splitSymbol );
        return ( (int) $convertToString );
    }

    function checkIpAddress (string $defaultIp, string $minIp, string $maxIp ) : bool {
        $default = strToNumber( $defaultIp );
        $maximum = strToNumber( $maxIp );
        $minimum = strToNumber( $minIp );
        
        if( $default >= $minimum && $default <= $maximum ) {
            return true;
        }

    }

    echo "\n";
    print_r(checkIpAddress("192.0.2.81", "192.0.2.70", "192.0.2.100"));
    echo "\n";