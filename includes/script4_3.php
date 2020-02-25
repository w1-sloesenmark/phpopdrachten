<?php
    //declareren en initialiseren van taak2
    $task2 ="Lancering in: ";
    $x = 20;

    //de while loop voegt alle waarden 19 tot 0 een voor een achter de string
    while($x>0){
        $x--;
        $task2 .= $x . " ";
    }

    //declareren en initialiseren van taak3
    $task3 = "Lancering in: ";

    //de for loop voegt alle waarden 19 tot 0 een voor een achter de string
    for($x=19;$x>=0;$x--){
        $task3 .= $x . " ";
    }

    //declareren van taak 4
    $task4 = "";
    $x = 1;

    //while loop maken om 6 headers te maken
    while($x<=6){
        $task4 .= "<h".$x.">Dit is de ".$x."e iteratie</h".$x.">";
        $x++;
    }


    //declareren van taak 5
    $task5 = "";
    $x = 1;

    //for loop maken om 10 tabel data's te maken
    $task5 .= "<table><tr>";
    for($x=1;$x<=10;$x++){
        $task5 .= "<td>Dit is de ".$x."e iteratie</td>";
    }
    $task5 .= "</tr></table>";


    //declareren van taak 6
    $task6 = "";
    $x = 2018;

    //while loop maken om mijn leeftijd uit te typen tot en met mijn geboortedatum headers te maken
    while($x>=1999){
        $leeftijd = $x - 1999;
        $task6 .= "<p>in ".$x." was ik " . $leeftijd ." jaar oud</p>";
        $x--;
    }

    //declareren van taak 7
    $task7 = "";
    $x = 1;

    //for loop om van 1 tot 15 te tellen
    for($x=1;$x<=15;$x++){
        $task7 .= "<p>Dit is de ".$x."e telling</p>";
    }

    //taak 8 alle varibalen echoën van de vorheen gaande opdrachten
    echo("<h3>Taak 2</h3><article><section>".$task2."</section></article>");
    echo("<h3>Taak 3</h3><article><section>".$task3."</section></article>");
    echo("<h3>Taak 4</h3><article><section>".$task4."</section></article>");
    echo("<h3>Taak 5</h3><article><section>".$task5."</section></article>");
    echo("<h3>Taak 6</h3><article><section>".$task6."</section></article>");
    echo("<h3>Taak 7</h3><article><section>".$task7."</section></article>");
?>