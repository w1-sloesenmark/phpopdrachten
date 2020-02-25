<?php
    if(!isset($index)) {
        include("../hoofdstuk3/variable.php");
    }

    //Taak 4.1
    //Declareer uur
    date_default_timezone_set('Europe/Amsterdam');
    $uur = date('H');
    $wens = "";

    //declareer en initialiseer wens
    if($uur >= 0 && $uur <5){
        $wens = "Goedennacht";
    }
    else if($uur >= 5 && $uur <12){
        $wens = "Goedenochtend";
    }
    else if($uur >= 12 && $uur <17){
        $wens = "Goedenmiddag";
    }
    else if($uur >= 17 && $uur < 24) {
        $wens = "Goedenavond";
    }

    //de footer via echo getoond aan de gebruiker

    echo("<footer>".$wens." bezoeker, copyright " . $name . " " . $year . " &copy;</footer>");
?>