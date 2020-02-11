<!doctype html>
<html>
    <head>

    </head>
    <body>
        <?php
            //Variable
            //-String
            //-Integer/number
            //-boolean

            $firstName = "Mark";
            $lastName = "Sloesen";

            $fullName = $firstName . " " . $lastName;

            //Integers / Numbers
            $yearOfBirth = 1999;
            $currentYear = date("Y");
            $age = $currentYear - $yearOfBirth;

            //Boolean
            $fromMaaskantje = false;
            $isMale = true;

            if($fromMaaskantje == true)
            {
                if($isMale == true){
                    echo("Wie is hier nou de snakcbar? Gij of ik?");
                }
                else
                {
                    echo("hoeren neuken nooit meer werken");
                }
            }
            else
            {
                echo("Bende gij homo of wah?");
            }
        ?>

        <div>
            <?php
                echo("<h1>Hallo ". $fullName . "</h1>");
                echo("<h2> ik ben vandaag ". $age . " jaar oud</h2>");
            ?>
        </div>
    </body>
</html>