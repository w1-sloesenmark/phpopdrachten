<?php
/**
 * User: Mark Sloesen
 * Date: 24-02-2020
 * Time: 19:37
 * File: opdracht_5-1.php
 */
?>
<html>
<head>
    <title>
        Opdracht 5.1
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
        <form action="../includes/form_data5_1.php" method="get">
            <label>Bedrijfsnaam</label>
            <input type="text" name="bedrijfsnaam">
            <label>Voornaam</label>
            <input type="text" name="naamV">
            <label>Achternaam</label>
            <input type="text" name="naamA">
            <label>Telefoon</label>
            <input type="tel" name="telefoon">
            <label>E-mail</label>
            <input type="email" name="email">
            <label>Bedrijfsnaam</label>
            <textarea name="bericht"></textarea>
            <input type="submit">
        </form>
        <br><br><a href="../index.php">terug</a>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

