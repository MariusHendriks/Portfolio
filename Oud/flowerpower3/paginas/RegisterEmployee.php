<?php
$Naam = $Username = $Wachtwoord = NULL;

if(isset($_POST['RegistratieFormulier']))
{
		$Naam = $_POST['firstname'];
		$Username = $_POST['username'];
		$Wachtwoord = $_POST['password'];

		$parameters = array(':Naam'=>$Naam,
							':Gebruikersnaam'=>$Username,
							':Wachtwoord'=>$Wachtwoord,
							':Level'=>2,
							);

		$sth = $pdo->prepare('INSERT INTO medewerkers (Naam, Gebruikersnaam, Wachtwoord, Level) VALUES (:Naam, :Gebruikersnaam, :Wachtwoord, :Level)');
		$sth->execute($parameters);

		echo 'Welkom, medewerker '.$Naam.'!<br />u kan nu inloggen.';
		// RedirectNaarPagina(1);
}
else
{
	require('./forms/RegisterEmployeeForm.php');
}
?>
