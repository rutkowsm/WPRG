<?php


function trojkat($a, $b, $c) {

        if (!(is_numeric($a) && is_numeric($b) && is_numeric($c))) {
            echo '<p>ERROR! Wstaw wartości numeryczne!</p>';

        }
        echo sprintf('<p>a=%d, b=%d, c=%d</p>', $a, $b, $c);
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            echo "Triangle created.";
        } else {
            echo "Cannot create triangle!";
        }
    }

trojkat(3, 4, 54);

 ?>
