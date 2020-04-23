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
        Opdracht 3.1
    </title>
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
    include('../includes/header.php');
    include('script.php');
?>
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
        <?php
        if($loginSuccess == false)
        {
             //Laat dit via echo zien:
             echo '<p>Login om onze inlogegevens + adresgegevens te zien</p>
                <p style="color: red">' . $message . '</p>
                <form action="login.php" method="post">
                    <input type="text" name="username">
                    <input type="password" name="password">
                    <input type="submit" value="login">
                </form>';
        }

        ?>


        <?php
        // Tonen van adresgegevens bij correcte login
        if($loginSuccess == true)
        {
            echo("<p>Welkom!</p>");
            echo("<table><tr><td>");
            echo("<fieldset style='width: 200px;'>");
            echo("<legend>Openingstijden</legend>");
            echo("<p>Do: 22:00</p>");
            echo("<p>Vr: All day</p>");
            echo("<p>Za: All day</p>");
            echo("<p>Zo: 12:00</p>");
            echo("</fieldset>");
            echo("</td><td>");
            echo("<fieldset style='width: 200px; height: 170px;'>");
            echo("<legend>Adresgegevens</legend>");
            echo("<p>AM Wriezener Bahnhof</p>");
            echo("<p>10243 Berlin</p>");
            echo("<p>Duitsland</p>");
            echo("</fieldset>");
            echo("</td></tr></table>");
            echo("<p>Deze gegevens dien je ten alle tijden geheim te houden!</p>");
        }
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

