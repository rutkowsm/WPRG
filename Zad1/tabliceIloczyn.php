<?php

function iloczynSkalarny($T1, $T2) {

    $finResult = 0;
    if (!(is_array($T1) && is_array($T2) || count($T1) != count($T2))) {
        die("ERROR1");
    }

    $allNumbersA = $T1 == array_filter($T1, 'is_numeric');
    $allNumbersB = $T2 == array_filter($T2, 'is_numeric');

    if (!($allNumbersA && $allNumbersB)) {
        die("ERROR2");
    }

    echo "A[]: ".implode($T1)."<br>";
    echo "B[]: ".implode($T2)."<br>";

    for ($i = 0; $i < count($T1); $i++) {
        $finResult = $finResult + $T1[$i] * $T2[$i];
    }

    echo "Iloczyn skalarny T1 i T2: ".$finResult;
}

$x = [1, 2, 3];
$y = [2, 4, 6];

iloczynSkalarny($x, $y);

 ?>
