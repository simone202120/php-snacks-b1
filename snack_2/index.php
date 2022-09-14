<?php


$numeriCasuali = [];

while (count($numeriCasuali) < 15) {
    $numeroDaTestare = rand(1, 90);

    if (!in_array($numeroDaTestare, $numeriCasuali)) {
        $numeriCasulai[] = $numeroDaTestare;

    }

}


?>