<?php
/**
 * User: Mark Sloesen
 * Date: 24-02-2020
 * Time: 22:09
 * File: index.php
 */
?>
<html>
<head>
    <title>
        Opdracht 5.4
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
        <form method="post" action="opdracht_5-4.php">
            <table>
                <tr>
                    <td>
                        <label>Komt er een ambulance aan?</label>
                        <input type="radio" name="ambulanceComming" value="yes">Ja
                        <input type="radio" name="ambulanceComming" value="no">Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Stop lichtkleur?</label>
                        <input type="radio" name="trafficLightColor" value="green">Groen
                        <input type="radio" name="trafficLightColor" value="orange">Oranje
                        <input type="radio" name="trafficLightColor" value="red">Rood
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="verzend">
                    </td>
                </tr>
                <tr>
                    <td>
                <?php
                if(isset($_POST["ambulanceComming"]) == true && isset($_POST["trafficLightColor"]) == true){
                    echo("<h1>Wat is de situatie en wat moet ik doen?</h1>");
                    if($_POST["trafficLightColor"] == "green"){
                        echo("<p>Het stoplicht staat op groen.</p>");
                    }elseif($_POST["trafficLightColor"] == "orange"){
                        echo("<p>Het stoplicht staat op oranje.</p>");
                    }elseif($_POST["trafficLightColor"] == "red"){
                        echo("<p>Het stoplicht staat op rood.</p>");
                    }

                    echo("<p>En er komt een ambulance aan: " . $_POST["ambulanceComming"] . "</p>");

                    if($_POST["trafficLightColor"] == "green" && $_POST["ambulanceComming"] == "no"){
                        echo("<p style='color: green'>Je mag doorrijden</p>");
                    }else{
                        echo("<p style='color: red'>Je mag niet doorrijden</p>");
                    }
                }


                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(isset($_POST["trafficLightColor"]) == false){
                        echo("<p style='color: red'>U heeft een ongeldige invoer gegeven</p>");
                    }
                }
                ?>
                    </td>
                </tr>
            </table>
        </form>
    </main>

</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

