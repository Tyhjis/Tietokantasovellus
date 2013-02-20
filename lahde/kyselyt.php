<?php

function tietokantayhteys()
{
    try {
    $yhteys = new PDO("pgsql:host=localhost;dbname=krha", "krha", "b6a38458539dcca8");
    } catch (PDOException $e) {
        die("VIRHE:" . $e->getMessage());
    }
    $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $yhteys;
}

function pizzojenhaku()
{
	/*$raha = " euroa";*/
    $yhteys = tietokantayhteys();
    $kysely = $yhteys->prepare("SELECT * FROM pizza");
    $kysely->execute();
    
    echo "<table border>";
    while ($rivi = $kysely->fetch()) 
    {
        echo "<tr>";
        echo "<td>" . $rivi["nimi"] . "</td>";
        echo "<td>" . $rivi["kuvaus"] . "</td>";
		echo "<td>" . $rivi["hinta"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function tilaukset()
{
	
	
}
?>
