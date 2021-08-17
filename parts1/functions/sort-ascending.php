<?php
    $arr = range(1, 10);

    shuffle($arr);

    function sortAscending ( array $array ) {

        if( count($array) === 1 ) {
            return $array;
        } 

        $item = $array[0];
        $lessItem = [];
        $moreItem = [];

        for ( $i = 1, $count = count($array) ; $i < $count; $i++ ) {

            if( $array[$i] <= $item ) {
                array_push($lessItem, $array[$i]);
            } 

            if( $array[$i] > $item ) {
                array_push($moreItem, $array[$i]);
            } 

        }

        return array_merge( sortAscending($lessItem), [$item], sortAscending($moreItem) );
        
    }

    echo "<pre>";
         print_r(sortAscending($arr)); 
         "<br /></pre>";

?>