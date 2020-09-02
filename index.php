<?php

    $getal = 1;
        echo is_int($getal), PHP_EOL;

    //array + for loop

    $klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

    print_r($klas);
    
    for($i = 0; $i < count($klas); $i++){
        echo $klas[$i], PHP_EOL;
    }
        foreach($klas as $value)
            echo $value, PHP_EOL;
    

    //combinatie opdracht

    $bucket_list = [];
    $hoeveelheid_activiteiten = readline("hoeveel activiteiten wil je toevoegen aan je bucket list?");
    
    for($i = 0; $i < $hoeveelheid_activiteiten; $i++){
        array_push($bucket_list, $activity = readline("welke activiteiten wil je toevoegen?"));
    }

    print_r($bucket_list);

    foreach($bucket_list as $item){
        echo $item, PHP_EOL;
    }


?>