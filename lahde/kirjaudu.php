<?php
	require_once 'kyselyt.php';
	$tunnus = $_POST["nimi"];
	$salasana = $_POST["salasana"];
	$yhteys = tietokantayhteys();
	$kysely = $yhteys->prepare("SELECT id, nimi FROM asiakkaat WHERE nimi = ? AND salasana = ?");
	$kysely->execute(array($tunnus, $salasana));
	$rivi = $kysely->rowcount();
	if($rivi == 1){
		$rivi = $kysely->fetch();
		session_start();
		$_SESSION["id"] = $rivi["id"];
		$_SESSION["nimi"] = $rivi["nimi"];
		$_SESSION["kirjauduttu"] = true;
		header("Location: kirjautumisen_varmistus.php");
	}
	else{
		header("Location: aloitus.php");		
	}
?>
