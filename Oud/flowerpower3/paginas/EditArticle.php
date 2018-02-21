<?php
// Check of de gebruiker is ingelogd:
if(LoginCheck($pdo))
{
	// If-statement om te controleren of je admin bent
	if($_SESSION['level'] >= 3)
	{
		$ArtikelNaam = $ArtikelPrijs = NULL;

		if(isset($_POST['Bewerken']))
		{
			$ArtikelNaam = $_POST['naam'];
			$ArtikelPrijs = $_POST['prijs'];

				// Het formulier is succesvol gevalideerd.
				// Gegevens van het Artikelen:
				$parameters = array(':naam' => $ArtikelNaam,
									':prijs' => $ArtikelPrijs,
									':artikelID' => $_SESSION['artikelID']
									);

				// Prepared statement waarmee de gegevens in de database worden gezet:
				$sth = $pdo->prepare('UPDATE artikelen SET
									naam = :naam,
									prijs = :prijs
									WHERE artikelID = :artikelID;
									');

				$sth->execute($parameters);
				echo 'Het artikel is succesvol geupdate.';
				header("Refresh: 5;URL=index.php?pagina=Articles");
		}
		else
		{

			$_SESSION['artikelID'] = $_POST['BewerkenArtikelVeld'];
			// echo $_SESSION['artikelID'];

			$parameters = array(':artikelid'=>$_SESSION['artikelID']);
			$sth = $pdo->prepare('select * from artikelen where artikelID = :artikelid');
			$sth->execute($parameters);
			$row = $sth->fetch();

		      $ArtikelNaam = $row['naam'];
		      $ArtikelPrijs = $row['prijs'];

			require('./forms/EditArticleForm.php');
		}
	}
	else
	{
		// User heeft niet het correcte level
		echo 'u wordt nu doorgestuurd.....';
		// Redirect naar home-pagina:
		header("Refresh: 5;URL=index.php?pagina=Homepage");
	}
}
else
{
	// Wanneer de user niet is ingelogd,
	// redirect naar inlogpagina.
	header("Refresh: 5;URL=index.php?pagina=Login");
}
?>
