<?php
    $a = [1, 23, 44, 88, 13, 11, 7, 8];

    foreach ($a as $x){
        if ($x % 2 == 0) {
            echo $x.PHP_EOL;
        }
    }
?>