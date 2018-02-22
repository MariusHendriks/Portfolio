<?php
	function ConnectDB()
	{
	try
	{
		//Voor op de server
		//$pdo = new PDO("mysql:host=localhost;dbname=hendriks3_flowerpower9", 'hendriks3_flowerpower9', '1234567');
		//Voor lokaal
		$pdo = new PDO("mysql:host=localhost;dbname=flowerpower9", 'root', '');
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
		return $pdo;
	}

/** De functie RedirectNaarPagina
  *
  *
  */
	function RedirectNaarPagina($pagina = NULL)
	{
		if(!isset($paginanr))
		{
			echo "<br />U word binnen 5 seconden doorgestuurd naar de hoofdpagina.";
			header("Refresh: 5;URL=index.php");
		}
		else
			header("Refresh: 5;URL=index.php?pagina=".$pagina);
	}

/** De functie LoginCheck
  *
  */
	function LoginCheck($pdo)
	{
	    //Controleer of Sessie variabelen bestaan
	    if (isset($_SESSION['user_id'], $_SESSION['username']))
			{
	      // $GebruikersID = $_SESSION['user_id'];
	      // $Login_String = $_SESSION['login_string'];
	      // $Username = $_SESSION['username'];
	      // $user_browser = $_SERVER['HTTP_USER_AGENT'];
				return true;
	   }
	}

/** Functie Login voor Medewerkers
	*
	*
	*/
function loginMedewerker($username, $password, $pdo)
{
	$parameters = array(':Gebruikersnaam'=>$username);
	$sth = $pdo->prepare('select * from medewerkers where Gebruikersnaam = :Gebruikersnaam');
	$sth->execute($parameters);

	if ($sth->rowCount() == 1)
	{
		$medewerker = $sth->fetch();

		if ($medewerker['Wachtwoord'] == $password)
		{
			$_SESSION['user_id'] = $medewerker['ID'];
			$_SESSION['username'] = $medewerker['Gebruikersnaam'];
			$_SESSION['naam'] = $medewerker['Naam'];
			$_SESSION['level'] = $medewerker['Level'];

			echo 'Inloggen is gelukt, '.$_SESSION['naam'].'! <meta http-equiv="refresh" content="3; URL=index.php?pagina=Homepage" />';
			return true;
		 }
		 else
		 {
			echo 'Verkeerd Wachtwoord!';
			return false;
		 }
	}
	else
	{
		echo 'Deze UserName kon niet gevonden worden!';
		return false;
	}
}

/** Functie login
	*
  *
	*/
	function login($username, $password, $pdo)
	{
		$parameters = array(':Gebruikersnaam'=>$username);
		$sth = $pdo->prepare('select * from klanten where Gebruikersnaam = :Gebruikersnaam');
		$sth->execute($parameters);

		if ($sth->rowCount() == 1)
		{
			$klant = $sth->fetch();

			if ($klant['Wachtwoord'] == $password)
			{
				$user_browser = $_SERVER['HTTP_USER_AGENT'];
				$_SESSION['user_id'] = $klant['GebruikersID'];
				$_SESSION['username'] = $klant['Gebruikersnaam'];
				$_SESSION['naam'] = $klant['Naam'];
				$_SESSION['level'] = 1;

				echo 'Inloggen is gelukt, '.$_SESSION['naam'].'! <meta http-equiv="refresh" content="3; URL=index.php?pagina=Homepage" />';
				return true;
			}
			else
			{
			 	echo 'Je wachtwoord is verkeerd...';
				return false;
			}
		}
		else
		{
			echo 'inloggegevens zijn verkeerd!';
			return false;
		}
	}
?>
