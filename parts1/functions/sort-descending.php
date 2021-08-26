<?php

    $arr = range(1, 10);

    shuffle($arr);

    function sortDescending ( array $array ) {

        if( count($array) === 1 ) {
            return $array;
        } 

        $item = $array[0];
        $lessItem = [];
        $moreItem = [];

        for ( $i = 1; $i < count($array); $i++ ) {

            if( $array[$i] <= $item ) {
                array_push($lessItem, $array[$i]);
            } 

            if( $array[$i] > $item ) {
                array_push($moreItem, $array[$i]);
            } 

        }

        return array_merge( sortDescending($moreItem), [$item], sortDescending($lessItem) );

    }

    echo "<pre>";
        print_r(sortDescending($arr));
    "</pre>";
?>