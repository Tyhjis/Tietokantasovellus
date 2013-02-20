<?php
	session_start();
	if(isset($_SESSION["kirjauduttu"]) && $_SESSION["kirjauduttu"] == true){
		header("Location: luettelo.php");
	}
	else{
		header("Location: aloitus.php");
	}
?>
