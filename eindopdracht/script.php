<?php
    //Naam:     Mark Sloesen
    //Opdracht: Eindopdracht
?>

<?php
    $userArrayList = [
        "Sjul" => "Gay",
        "Koos" => "Bed4nktVoorDezeEer",
        "Jim" => "CallWheazer",
        "Mark" => "Poep",
        "Bier" => "Bavaria",
        "Sjol" => "Vuil",
        "Koes" => "Loser",
        "Jom" => "Held",
        "Mork" => "Banaan",
        "Bierrr" => "Pilsener"
    ];
    
    //Eventuele foutmeldingen komen in dezee string
    $message = "";
    // Is de persoon succesvol ingelogd?
    $loginSuccess = false;

//Checken of gegeven username en wachtwoord bestaat in de array $userArrayList
    if(isset($_POST["username"]) == true && isset($_POST["password"]) == true){
        //foreach gebruiken we om door de $userArrayList heen te lopen
        foreach($userArrayList as $index => $value)
        {
            //Bepalen of opgegeven $_POST waardes in de array aanwezig zijn
            if($_POST["username"]==$index&&$_POST["password"]==$value){
                // Username en password zijn gevonden!
                $loginSuccess = true;
            } else {
                $message = "foutieve username en / of wachtwoord";
            }
        }
    }
?>