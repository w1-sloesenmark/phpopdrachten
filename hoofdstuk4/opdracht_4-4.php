<?php
/**
 * User: Mark Sloesen
 * Date: 24-02-2020
 * Time: 17:24
 * File: opdracht_4-4.php
 */
?>
<html>
<head>
    <title>
        Opdracht 4.4
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
        <h2>Opdracht 4.4</h2>
        <?php
            //Vandaag
            $nu = strtotime("now");
            $datumVandaag = date('d-m-Y', $nu);
            //dag van de week 0-7
            $datumDag = date('w', $nu);
            echo "Vandaag is het de ".$datumDag." dag en de datum is ".$datumVandaag;
            echo "<br>";
            $dagenWeek = array("zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");
            echo "Vandaag is het ".$dagenWeek[$datumDag]. " en de datum is ".$datumVandaag;

            //Morgen
            $nu = strtotime("+1 days");
            $datumVandaag = date('d-m-Y', $nu);
            $datumDag = date('w', $nu);

            echo("<br>Morgen is het de ".$datumDag." dag en de datum is ".$datumVandaag);
            echo("<br>");
            echo("Morgen is het ".$dagenWeek[$datumDag]. " en de datum is ".$datumVandaag);



            //Taak 4
            $x = 0;
            echo("<h3>Taak 4</h3>");
            for($x=0;$x<7;$x++){
                $nu = strtotime("+".$x." days");
                $datumVandaag = date('d-m-Y', $nu);
                $datumDag = date('w', $nu);
                echo("Dag ".$x." is een ".$dagenWeek[$datumDag]." en de datum is ".$datumVandaag."<br>");
            }

            echo("<br><br>");

            //Taak 5.1
            echo("<h3>Taak 5.1</h3>");
            for($x=0;$x<7;$x++){
                $nu = strtotime("next sunday +".$x." days");
                $datumVandaag = date('d-m-Y', $nu);
                $datumDag = date('w', $nu);
                echo("Dag ".$x." is een ".$dagenWeek[$datumDag]." en de datum is ".$datumVandaag."<br>");
            }
            echo("<br><br>");

            //Taak 5.2
            echo("<h3>Taak 5.2</h3>");
            for($x=0;$x<date('t');$x++){
                $nu = strtotime("1 ".date('F')." ".date('o')." +".$x." days");
                $datumVandaag = date(  'd-m-Y', $nu);
                $datumDag = date('w' , $nu);
                echo("Dag ".$x." is een ".$dagenWeek[$datumDag]." en de datum is ".$datumVandaag."<br>");
            }
            echo("<br><br>");

            //Taak 5.3
            echo("<h3>Taak 5.3</h3>");
            for($x=0;$x<366;$x++){
                $nu = strtotime("1 January".date('o')." +".$x." days");
                $datumVandaag = date('d-m-Y', $nu);
                $datumDag = date('w' , $nu);
                if($datumDag==1) {
                    echo("Dag " . $x . " is een " . $dagenWeek[$datumDag] . " en de datum is " . $datumVandaag . "<br>");
                }
            }
            echo("<br><br>");

            //Taak 5.4
            echo("<h3>Taak 5.4</h3>");
            for($x=1;$x<=12;$x++){
                $nu = strtotime("1-". $x ."-2020");
                if(date('t',$nu) == 31){
                    echo(date('F',$nu)." heeft 31 dagen<br>");
                }
            }
            echo("<br><br>");
        ?>
        <br><br><a href="../index.php">terug</a>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

