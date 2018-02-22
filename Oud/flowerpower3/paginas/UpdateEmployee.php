<?php
	// Check of de user is ingelogd:
	if(LoginCheck($pdo))
	{
		// Pagina alleen zichtbaar voor level 1 of hoger
		if($_SESSION['level'] >= 2)
		{

			$Name = $Username = $Password = NULL;

			// Als er op Wijzigen wordt gedrukt:
			if(isset($_POST['Wijzigen']))
			{
				$Name = $_POST['Name'];
				$Password = $_POST['Password'];

				// Het formulier is succesvol gevalideerd.
				// De gegevens van de gebruiker worden ingevoegd:
				$parameters = array(':Naam' => $Name,
									':Password' => $Password,
									':GebruikersID' => $_SESSION['user_id']
									);

				// Prepared statement waarmee de gegevens in de database worden gezet:
				$sth = $pdo->prepare('UPDATE medewerkers SET
						Naam = :Naam,
						Wachtwoord = :Password
						WHERE ID = :GebruikersID;
						');

				$sth->execute($parameters);
				echo 'uw gegevens zijn succesvol geupdate';
				header("Refresh: 5;URL=index.php?pagina=UpdateEmployee");
			}
      if(isset($_POST['Verwijder']))
      {
        $medewerker = $_SESSION['user_id'];

        $parameters = array(':Medewerker'=>$medewerker);
        $sth = $pdo->prepare('DELETE from medewerkers where ID = :Medewerker');
        $sth->execute($parameters);
        session_destroy();
        header("Refresh: 5;URL=index.php?pagina=Homepage");
      }
			else
			{
				// Verzamel hier de gegevens van de user uit de database
				$parameters = array(':gebruikersnaam'=>$_SESSION['user_id']);
				$sth = $pdo->prepare('select * from medewerkers where ID = :gebruikersnaam');
				$sth->execute($parameters);
	      $klant = $sth->fetch();

				// Stop dit vervolgens in variabelen
	      $Name = $klant['Naam'];
        $Password = $klant['Wachtwoord'];
	      $Username = $klant['Gebruikersnaam'];

				// Die variabelen worden doorgegeven aan dit formulier:
				require('./forms/UpdateEmployeeForm.php');
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
