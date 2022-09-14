<?php


    $studenti = [
                    [
                        "nome" => "Simone",
                        "cognome" => "Fortunato",
                        "voti" => [9,10,9,8]
                    ],
                    [
                        "nome" => "Antonio",
                        "cognome" => "Gianni",
                        "voti" => [6,7,4,10]
                    ],
                    [
                        "nome" => "Michele",
                        "cognome" => "Giuseppe",
                        "voti" => [4,8,9,2]
                    ],

                ];

    for ($i=0; $i<count($studenti); $i++) {

        $studente = $studenti[$i];
        $somma =0;

        $voti = $studene["voti"];
        for($x=0; $x<count($voti); $x++){
            $somma += $voti[$x];
        }

        $media = $somma / count($voti);

        echo $studente["nome"] . ' ' . $studente["cognome"] . ' ' . $media;
    }

?>