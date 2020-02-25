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
        <?php
        echo "<style> 
        label {
            width: 20em;
            display: inline-block;    
        }
        </style>";

        echo "<h2>Opdracht 5.3</h2>";
        echo "
         
            <form method='post' action='../includes/form_data5_3.php'>
            <fieldset>
            <legend>Registratieformulier</legend>
	        <div><label>Naam: </label><input name='naam' type='text' value=''>
            </div><div>
            </div><div><label>Geslacht:</label><span>M</span>
            <input type='radio' name='geslacht' value='M'>&nbsp;<span>V</span><input type='radio' name='geslacht' value='V'>
            
            </div><div><label>Leeftijdscategorie:</label>
            <select name='leeftijdscategorie'>
                    <option value='-1'>Selecteer leeftijdsgroep</option>
                    <option value='1'>&lt;18</option>
                    <option value='2'>18 - 25</option>
                    <option value='3'>26 - 40</option>
                    <option value='4'>&gt;41</option>
            </select>            
           
	        </div><div><label>Email: </label><input name='email' type='text' value=''>
            
            </div><div><label>Interessegebieden?</label>
                IT<input type='checkbox' name='it' value='1'>
                &nbsp;Games<input type='checkbox' name='games' value='1'>
                &nbsp;Anime<input type='checkbox' name='anime' value='1'>
	        </div>
	        <div>
	        <label>Telefoonnummer</label>
	        <input type='tel' name='telefoonnummer'>
	        </div></fieldset>
	        <div>
	        <input type='submit' value='verzend' name='verzend'>
	        <input type='reset' value='reset' name='reset'>
            </div>
            </form>       
";

        ?>
        <br><br><a href="../index.php">terug</a>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

