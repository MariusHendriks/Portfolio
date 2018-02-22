<?php
	// Check of de gebruiker is ingelogd
	if(LoginCheck($pdo))
	{
		// Check of de gebruiker level 3 is (Admin)
		if($_SESSION['level'] >= 3)
		{
			// Initialiseer alle variabelen tegelijk als NULL
			$ArtikelNaam = $Prijs = NULL;

			// Als er op Toevoegen gedrukt is, dan:
			if(isset($_POST['Toevoegen']))
			{
				// Lees alle gegevens uit het formulier uit met POST
				$artikelID = '';
				$ArtikelNaam = $_POST['naam'];
				$Prijs = $_POST['prijs'];

				// Gegevens van het artikel worden ingevoerd:
				$parameters = array(':naam' => $ArtikelNaam,
									':prijs' => $Prijs,
									);

				// Pas op, de volgorde maakt uit, het moet overeen komen met de dastabase!
				$sth = $pdo->prepare('INSERT INTO artikelen (naam, prijs) VALUES (:naam, :prijs);');
				$sth->execute($parameters);

				// Een melding dat het gelukt is, met resultaat. ?>
				<h3 class="panel-title">Artikel invoeren succesvol.</h3>

				<div class="panel-body">
					<b>gegevens van artikel:</b> <br>
					<b>Naam:</b> <?=$ArtikelNaam?><br>
					<b>Prijs:</b> €<?=$Prijs?> <br>

				</div>

				<?php
			}
			else
			{
				require('./forms/AddArticleForm.php');
			}
		}
		else
		{
			// User heeft niet het correcte level
			echo 'u heeft geen bevoegdheden om hier te komen......';
			// Redirect naar home
			header("Refresh: 5;URL=index.php?pagina=Homepage");
		}
	}
	else
	{
		echo 'u bent niet ingelogd';
		// User is niet ingelogd, redirect
		header("Refresh: 5;URL=index.php?pagina=Login");
	}
?>
