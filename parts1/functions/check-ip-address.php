<?php
    function checkIpAddress (string $defaultIp, string $minIp, string $maxIp ) : bool {
        $default = explode('.', $defaultIp);
        $maximum = explode('.', $maxIp);
        $minimum = explode('.', $minIp);
        
        if( intval( end( $default ) ) >= intval( end( $minimum ) ) 
            &&  intval( end( $default ) ) <= intval( end($maximum) ) ) 
        {
            return true;
        }else {
            return false;
        }

    }
    
    var_dump(checkIpAddress("192.0.2.81", "192.0.2.70", "192.0.2.100"));
?>