<?php

function gwiazdki($n) {

        if (!is_numeric($n) || $n <= 0) {
            die("ERROR");
        }

        for ($i = 1; $i < $n + 1; $i++) {
            echo str_repeat('*', $i);
            echo nl2br("\n");
        }

        for ($i = $n; $i > 0; $i--) {
            echo str_repeat('*', $i);
            echo nl2br("\n");
        }

        for ($i = 0; $i < $n; $i++) {
            echo str_repeat('&nbsp;', $i * 2).str_repeat('*', $n - $i);
            echo nl2br("\n");
        }

        for ($i = $n - 1; $i >= 0; $i--) {
            echo str_repeat('&nbsp;', $i * 2).str_repeat('*', $n - $i);
            echo nl2br("\n");
        }
    }

gwiazdki(2);

 ?>
