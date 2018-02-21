<?php
	// Check of de user is ingelogd:
	if(LoginCheck($pdo))
	{
		// Pagina alleen zichtbaar voor level 1 of hoger
		if($_SESSION['level'] >= 1)
		{

			$Name = $Adres = $ZipCode = $City = $Username = $Password = NULL;

			// Als er op Wijzigen wordt gedrukt:
			if(isset($_POST['Wijzigen']))
			{
				$Name = $_POST['Name'];
				$Adres = $_POST['Adres'];
				$ZipCode = $_POST['ZipCode'];
				$City = $_POST['City'];

				// Het formulier is succesvol gevalideerd.
				// De gegevens van de gebruiker worden ingevoegd:
				$parameters = array(':Naam' => $Name,
									':Adres' => $Adres,
									':Postcode' => $ZipCode,
									':Plaats' => $City,
									':GebruikersID' => $_SESSION['user_id']
									);

				// Prepared statement waarmee de gegevens in de database worden gezet:
				$sth = $pdo->prepare('UPDATE klanten SET
						Naam = :Naam,
						Adres = :Adres,
						Postcode = :Postcode,
						Plaats = :Plaats
						WHERE  GebruikersID = :GebruikersID;
						');

				$sth->execute($parameters);
				echo 'uw gegevens zijn succesvol geupdate';
				header("Refresh: 5;URL=index.php?pagina=MyProfile");
			}
			else
			{
				// Verzamel hier de gegevens van de user uit de database
				$parameters = array(':gebruikersnaam'=>$_SESSION['user_id']);
				$sth = $pdo->prepare('select * from klanten where GebruikersID = :gebruikersnaam');
				$sth->execute($parameters);
	      $klant = $sth->fetch();

				// Stop dit vervolgens in variabelen
	      $Name = $klant['Naam'];
	      $Adres = $klant['Adres'];
	      $ZipCode = $klant['Postcode'];
	      $City = $klant['Plaats'];
	      $Username = $klant['Gebruikersnaam'];

				// Die variabelen worden doorgegeven aan dit formulier:
				require('./forms/MyProfileForm.php');
			}
		}
		else
		{
			// De user heeft niet het correcte level
			// en wordt geredirect naar home.
			echo 'U bent niet ingelogd.';
			header("Refresh: 5;URL=index.php?pagina=Homepage");
		}
	}
	else
	{
		// De user is niet ingelogd, redirect naar inlogpagina
		header("Refresh: 5;URL=index.php?pagina=Login");
	}
?>
