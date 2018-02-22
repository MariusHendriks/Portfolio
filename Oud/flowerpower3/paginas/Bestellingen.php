<?php
	//Als er op de knop is gedrukt
	if(isset($_POST['setorder']))
	{
		//Zet het in de array parameters
		$parameters = array(
							':factuurNummer'=> $_POST['setorder'],
							':medewerkerNummer' => $_SESSION['user_id']
				 			);
		//Update de database factuur (zodat de bestelling bestaat)
		$sth = $pdo->prepare('UPDATE factuur SET
							factuurNummer = :factuurNummer,
							medewerkerNummer = :medewerkerNummer
							WHERE factuurNummer = :factuurNummer;
							');
		//Execute (voer de) parameters uit
		$sth->execute($parameters);
	}

	if(isset($_POST['afgehandeld']))
	{
		$parameters = array(
							':factuurNummer'=> $_POST['afgehandeld'],
							':afgehandeld' => 1
	 						);

		$sth = $pdo->prepare('UPDATE factuur SET
							factuurNummer = :factuurNummer,
							afgehandeld = :afgehandeld
							WHERE factuurNummer = :factuurNummer;
							');

		$sth->execute($parameters);
	}

	// $parameters = array(':factuurNummer'=> $_SESSION['factuurnummer'] );

	// show alleen wat nog niet is afgehandeld
	$sth = $pdo->prepare('SELECT * FROM factuur WHERE afgehandeld = 0');
	$sth->execute();
	$facturen = $sth->fetchAll();

	foreach ($facturen as $factuur) {

		echo '<b>Factuurnummer: </b>'.$factuur['factuurNummer'].'<br>';
		echo '<b>is hij klaar?:</b>'.$factuur['afgehandeld'].'<br>';
		// Vraag winkeldetails op
		$parameters = array(':winkel'=> $factuur['winkelNummer'] );
		$sth = $pdo->prepare('SELECT * FROM winkel WHERE winkelNummer = :winkel');
		$sth->execute($parameters);
		$winkel = $sth->fetch();
		echo '<b>Gekozen Winkel: </b>'.$winkel['winkelNaam'].'<br>';

		// Vraag Klant op
		$parameters = array(':klant'=> $factuur['klantNummer'] );
		$sth = $pdo->prepare('SELECT * FROM klanten WHERE GebruikersID = :klant');
		$sth->execute($parameters);
		$klant = $sth->fetch();
		echo '<b>Voor klant: </b>'.$klant['Naam'].'<br>';

		// Haal de artikelgegevens op van alle artikelen in de bestelling
		$parameters = array(':factuurNummer'=> $factuur['factuurNummer'] );
		$sth = $pdo->prepare('SELECT artikelID, artikelAantal FROM factuur_regels WHERE factuurNummer = :factuurNummer');
		$sth->execute($parameters);
		$artikelen = $sth->fetchAll();

		echo '<b>Bestelde producten: </b><br />';
		foreach ($artikelen as $artikel) {
		  $parameters = array(':artikelid'=> $artikel['artikelID'] );
		  echo ' X'.$artikel['artikelAantal'];
		  $sth = $pdo->prepare('SELECT * FROM artikelen WHERE artikelID = :artikelid');
		  $sth->execute($parameters);
		  $naam = $sth->fetch();
		  echo $naam['naam'].'<br>';
		} ?>
		<form class="" action="" method="post" name="setorder">
			<button type="submit" name="setorder" value="<?=$factuur['factuurNummer']?>">Markeer als Klaar</button>
		</form>

		<form class="" action="" method="post" name="afgehandeld">
			<button type="submit" name="afgehandeld" value="<?=$factuur['factuurNummer']?>">Markeer als Afgehaald</button>
		</form>
		<?php
		echo '<hr>';
	}
?>
