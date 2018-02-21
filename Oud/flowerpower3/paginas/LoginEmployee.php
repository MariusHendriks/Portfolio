<?php

// Wanneer de button om in te loggen voor medewerkers is ingedrukt:
if(isset($_POST['InloggenMedewerker']))
{
  $username = $_POST['medewerkerusername'];
  $password = $_POST['medewerkerpassword'];
  loginMedewerker($username, $password, $pdo);
}

// Als er nog niet op inloggen gedrukt is, wordt het formulier weergeven:
else
{
	require('./forms/LoginEmployeeForm.php');
}
