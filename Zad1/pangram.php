<?php

function pangram($phrase) {

    $alphabet = range('a', 'z');
    $phrase = strtolower(trim($phrase));

    foreach ($alphabet as $letter) {
        if (!strstr($phrase, $letter)) {
            die("''$phrase' nie jest pangramem.");
        }
    }
    echo "'$phrase' jest pangramem.";
}

pangram("The quick brown fox jumps over the lazy dog");
 ?>
