<?php

try {
	$yhteys = new PDO("pgsql:host=localhost;dbname=krha", "krha", "b6a38458539dcca8");
} catch (PDOException $e) {
	die("VIRHE: " . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$kysely = $yhteys->prepare("SELECT * FROM tuotteet");
$kysely->execute();

echo "<table border>";
while ($rivi = $kysely->fetch()) {
	echo "<tr>";
	echo "<td>" . $rivi["nimi"] . "</td>";
	echo "<td>" . $rivi["hinta"] . "</td>";
	echo "</tr>";
}
echo "</table>";

?>
