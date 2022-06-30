<?php

function sorter($a, $b, $c) {

        if ($a > $c) {
            $t = $a;
            $a = $c;
            $c = $t;
        }

        if ($a > $b) {
            $t = $a;
            $a = $b;
            $b = $t;
        }

        if ($b > $c) {
            $t = $b;
            $b = $c;
            $c = $t;
        }

        echo $a . ", " . $b . ", " . $c . "<br>";
        echo $c . ", " . $b . ", " . $a;
    }

sorter(34, 12, 22);


 ?>
