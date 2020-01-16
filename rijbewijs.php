<?php

    echo "Hoe oud ben jij?". PHP_EOL;
    $a = readline("");

    if($a <= 18){
        echo "Je bent te jong";
    } else {
        echo "Je bent op leeftijd";
    }