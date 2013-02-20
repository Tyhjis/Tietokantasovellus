<?php

try {
    $yhteys = new PDO("pgsql:host=localhost;dbname=krha", "krha", "b6a38458539dcca8");
} catch (PDOException $e) {
    die("VIRHE:" . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//kyselyn suoritus
$kysely = $yhteys->prepare("INSERT INTO asiakkaat (nimi, osoite, salasana) VALUES (?, ?, ?)");
$kysely->execute(array($_POST["nimi"], $_POST["osoite"], $_POST["salasana"]));

//lisätyn rivin id:n selvitys
$id = $yhteys->lastInsertId("asiakkaat_id_seq");
echo "Uuden asiakkaan id: $id";

?>
