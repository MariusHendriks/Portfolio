<?php
	// Wanneer de button om in te loggen van het formulier is ingedrukt:
	if(isset($_POST['Inloggen']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		login($username, $password, $pdo);
	}

	// Als er nog niet op inloggen gedrukt is, wordt het formulier weergeven:
	else
	{
		require('./forms/LoginForm.php');
	}
?>
