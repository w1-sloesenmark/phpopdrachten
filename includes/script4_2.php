<?php
    /*
     * Alle vakken van school
     * Nederlands
     * Engels
     * Rekenen
     * PHP
     * HTML/CSS
     * Javascript
     * SQL
     * ASP
     * Modelleren
     * Digitale vaardigheden
     * Computer Tekenen
     * Loopbaan en Burgerschappen
     */

    //declareer en initialiseer vaknaam
    $courseName = "PHP";

    switch($courseName){
        case "Nederlands":
            $teacherName = "van den Ende";
            break;
        case "Engels":
            $teacherName = "Giesen";
            break;
        case "Rekenen":
            $teacherName = "van de Wetering";
            break;
        case "PHP":
            $teacherName = "Spierings";
            break;
        case "ASP":
        case "HTML/CSS":
            $teacherName = "van Meer";
            break;
        case "Javascript":
            $teacherName = "Evers";
            break;
        case "SQL":
            $teacherName = "Gijsbrechts";
            break;
        case "Modelleren":
            $teacherName = "van Bijnen";
            break;
        case "Digitale vaardigheden":
            $teacherName = "Pielage";
            break;
        case "Computer Tekenen":
            $teacherName = "van den Berg";
            break;
        case "Loopbaan en Burgerschappen":
            $teacherName = "Bollattekin";
            break;
        default:
            $teacherName = "N/A";
            break;
    }
?>