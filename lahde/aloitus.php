<?php
require_once 'kyselyt.php';
pizzojenhaku();
?>
<h>Kirjautuminen: </h>
<form action="kirjaudu.php" method="post">
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Salasana: <br>
	<input type="password" name="salasana"></p>
	<input type="submit" value="Kirjaudu">
</form>
