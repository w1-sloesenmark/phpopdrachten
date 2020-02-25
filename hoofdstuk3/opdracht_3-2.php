<?php
/**
 * User: Mark Sloesen
 * Date: 20-02-2020
 * Time: 08:45
 * File: index.php
 */
?>
<html>
<head>
    <title>
        Opdracht 3.2
    </title>
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php include("../includes/header.php") ?>
<div id="content">
    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="opdracht_3-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="opdracht_3-2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="opdracht_3-3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht_4-3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Opdracht 3.2</h2>
        <?php
            //declareer en initialeer de gewenste variable
            $trafficLightColor = "Oranje";
            $ambulanceComing = true;

            //driveOn declareren en initialeren
            $driveOn = true;

            //Kijken of de auto mag doorrijden of moet stoppen
            if($trafficLightColor == "Groen" && $ambulanceComing == false){
                $driveOn = true;
            }
            else if($trafficLightColor == "Oranje" || $ambulanceComing == true){
                $driveOn = false;
            }
            else if($trafficLightColor == "Rood" || $ambulanceComing == true){
                $driveOn = false;
            }
            else {
                echo("<p>Foutje. het stoplicht heeft  een ongeldige kleur</p>");
                $driveOn = true;
            }

            //Tonen of de auto mag doorrijden
            if($driveOn == true){
                echo("<h1 style='color:green'>U mag doorrijden</h1>");
            }
            else {
                echo("<h1 style='color:red'>U mag niet doorrijden</h1>");
            }
        ?>
        <hr>
        <?php
            //alcohol in verschillende landen
            $countryName = "Nederland";
            $currentAge = 20;
            echo("<p>Je woont in ".$countryName." en je bent ".$currentAge." jaar oud.</p>");

            //tonen van de drank informatie
            if($currentAge >= 16 && $countryName == "België" && $countryName < 18){
                echo("<p>Je mag hier zwakke alcohol drinken</p>");
            }
            else if($currentAge >= 18 && $countryName == "Beldië"){
                echo("<p>Je mag hier sterke alcohol dirnken</p>");
            }
            else if($countryName == "Bulgarijë" && $currentAge >= 18){
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else if($countryName == "Cyprus" && $currentAge >= 17){
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else if($countryName == "Nederland" && $currentAge >= 18){
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else{
                echo("<p>Je mag hier geen alcohol drinken</p>");
            }
        ?>
        <a href="../index.php">terug</a>
    </main>
</div>
<?php include("../includes/footer.php") ?>
</body>
</html>

