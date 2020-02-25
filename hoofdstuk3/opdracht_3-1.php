<?php
/**
 * User: Mark Sloesen
 * Date: 24-02-2020
 * Time: 08:45
 * File: opdarcht_3-1.php
 */
?>
<html>
<head>
    <title>
        Opdracht 3.1
    </title>
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php include('../includes/header.php'); ?>
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
                        <a href="../hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk4/opdracht_4-3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="../hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Opdracht 3.1</h2>
        <?php
            //declareer en initialiseer variablen van het verhaal
            $evenement = "Elfstedentocht";
            $evenementFries = "Alvestêdetocht";
            $evenementAfstand = 200;
            $evenementSport = "schaatstocht";
            $evenementIJs = "natuursijs";
            $evenementOrganisator = "Koninklijke Vereniging de Friesche Elf Steden";
            $evenementStad = "Leeuwarden";
            $evenementProvincie = "Friesland";
            $evenementAantal = 15;
            $evenementBeginJaar = 1909;
            $evenementPerWinter = 1;

            //declareer eninitialiseer het verhaal
            $verhaal = "De " . $evenement . " (Fries: " . $evenementFries . ") is een " . $evenementAfstand . " kilometer lange " . $evenementSport . " over " . $evenementIJs . " die wordt georganiseerd door de " . $evenementOrganisator . ". " . $evenementStad . ", de hoofdstad van " . $evenementProvincie . ", is start- en aankomstplaats. De " . $evenement . " is inmiddels " . $evenementAantal . " maal verreden en werd voor het eerst in " . $evenementBeginJaar . " gereden en wordt maximaal " . $evenementPerWinter . " keer per winter gehouden.";

            //verhaal in een paragraaf
            echo("<h3>Taak 1</h3>");
            echo("<article><p>" . $verhaal . "</p></article>");

            //declareer het tweede verhaal
            $verhaal2 = "";

            //initialiseer het tweede verhaal
            $verhaal2 .= "De " . $evenement . " (Fries: " . $evenementFries . ") is een " . $evenementAfstand . " kilometer ";
            $verhaal2 .= "lange " . $evenementSport . " over " . $evenementIJs . " die wordt georganiseerd door ";
            $verhaal2 .= "de " . $evenementOrganisator . ". " . $evenementStad . ", ";
            $verhaal2 .= "de hoofdstad van " . $evenementProvincie . ", is start- en aankomstplaats. De ";
            $verhaal2 .= $evenement . " is inmiddels " . $evenementAantal . " maal verreden en werd voor het ";
            $verhaal2 .= "eerst in " . $evenementBeginJaar . " gereden en wordt maximaal " . $evenementPerWinter . " keer per winter ";
            $verhaal2 .= "gehouden.";

            //tweede verhaal in een paragraaf
            echo("<h3>Taak 2</h3>");
            echo("<article><p>".$verhaal2."</p></article>");


        ?>
        <a href="../index.php">terug</a>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

