<?php
/**
 * User: Mark Sloesen
 * Date: 24-02-2020
 * Time: 20:03
 * File: opdracht_5-2.php
 */
?>
<html>
<head>
    <title>
        Opdracht 5.2
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
        <h2>Uitschrijfformulier KW1C</h2>
        <hr>
        <form action="../includes/form_data5_2.php" method="get">
            <table>
                <tr>
                    <td>
                        <label>Voor en achternaam</label>
                    </td>
                    <td>
                        <input type="text" name="naam">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Studentennummer</label>
                    </td>
                    <td>
                        <input type="number" name="studentennummer">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Datum van uitschrijving</label>
                    </td>
                    <td>
                        <input type="date" name="uitschrijfDatum">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Reden van uitschrijving</label>
                    </td>
                    <td>
                        <select name="uitschrijfReden">
                            <option value="verkeerdeKeuze">Verkeerde Keuze</option>
                            <option value="nietGehaald">Niet gehaald</option>
                            <option value="ziek">Ziek</option>
                            <option value="verhuizing">verhuizing</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Leerjaar</label>
                    </td>
                    <td>
                        <input type="radio" name="leerjaar" value="1e"><label for="1e">1e leerjaar</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="leerjaar" value="2e"><label for="2e">2e leerjaar</label></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="leerjaar" value="3e"><label for="3e">3e leerjaar</label></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="succesklas" value="NEE">
                        <input type="checkbox" name="succesklas" value="'JA"><label for="succesklas">Ik wil me aanmelden bij de succesklas</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="verwijderGegevens" value="NEE">
                        <input type="checkbox" name="verwijderGegevens" value="JA"><label for="verwijderGegevens">Verwijder mijn gegevens uit het systeem</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label>Geef hieronder de reden van je uitschrijving</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="redenText"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
        <br><br><a href="../index.php">terug</a>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

