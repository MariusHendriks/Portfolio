<?php
$Naam = $Adres = $Postcode = $Plaats = $Username = $Wachtwoord = $Geboortedatum = NULL;

if(isset($_POST['RegistratieFormulier']))
{
		$Naam = $_POST['firstname'];
		$Username = $_POST['username'];
		$Wachtwoord = $_POST['password'];
		$Geboortedatum = $_POST['geboortedatum'];
		$Plaats = $_POST['city'];
		$Postcode = $_POST["postalcode"];
		$Adres = $_POST["street"];


		$parameters = array(':Naam'=>$Naam,
							':Adres'=>$Adres,
							':Postcode'=>$Postcode,
							':Plaats'=>$Plaats,
							':Gebruikersnaam'=>$Username,
							':Wachtwoord'=>$Wachtwoord,
							':Level'=>1,
							':Geboortedatum'=>$Geboortedatum
							);

		$sth = $pdo->prepare('INSERT INTO klanten (Naam, Adres, Postcode, Plaats, Gebruikersnaam, Wachtwoord, Level, Geboortedatum) VALUES (:Naam, :Adres, :Postcode, :Plaats, :Gebruikersnaam, :Wachtwoord, :Level, :Geboortedatum)');
		$sth->execute($parameters);

		echo 'Welkom '.$Naam.'!<br />u kan nu inloggen.';
		// RedirectNaarPagina(1);
}
else
{
	require('./forms/RegisterForm.php');
}
?>
