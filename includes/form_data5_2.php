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
        <h2>Uitschrijfformulier KW1C:</h2>
        <hr>
        <table>
            <tr>
                <td>Voor en achternaam</td>
                <td><?php echo($_GET['naam'])?></td>
            </tr>
            <tr>
                <td>studentennummer</td>
                <td><?php echo($_GET['studentennummer'])?></td>
            </tr>
            <tr>
                <td>Datum van uitschrijving</td>
                <td><?php echo($_GET['uitschrijfDatum'])?></td>
            </tr>
            <tr>
                <td>Reden van uitschrijving</td>
                <td><?php echo($_GET['uitschrijfReden'])?></td>
            </tr>
            <tr>
                <td>leerjaar</td>
                <td><?php echo($_GET['leerjaar'])?> leerjaar</td>
            </tr>
            <tr>
                <td>Aanmelden bij succesklas</td>
                <td><?php echo($_GET['succesklas'])?></td>
            </tr>
            <tr>
                <td>Verwijder gegevens</td>
                <td><?php echo($_GET['verwijderGegevens'])?></td>
            </tr>
            <tr>
                <td>Reden van uistrijving</td>
                <td><?php echo($_GET['redenText'])?></td>
            </tr>
        </table>
        <pre><?php print_r($_GET) ?></pre>
        <br><br><a href="../index.php">terug</a>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

