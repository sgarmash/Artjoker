<?php
$array = [
    1, 4, 5, [8, 9], 12, [3, 4, [1,3 ,70]]
];

function keyInArray( $arr ) {
    for ( $i = 0, $count = count($arr); $i < $count; $i++ ) {
        if(is_array($arr[$i])) {
            keyInArray($arr[$i]);
        }else {
            print_r($arr[$i]);
        }
        echo "<br />";
    }
}

echo "<pre>"; keyInArray( $array ); "</pre>";