<?php
ob_start();
session_start();
require('./config.php');
require('./php/functions.php');


// connect met de database
$pdo = ConnectDB();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Flower Power</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?pagina=Homepage">Flowerpower</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?pagina=Homepage">Home</a></li>
                    <li><a href="index.php?pagina=Articles">Artikelen</a></li>
                    <li><a href="index.php?pagina=Winkels">Winkels</a></li>
                    <?php
                    if(isset($_SESSION['user_id']) && $_SESSION['level'] >= 2) {
                    ?>
                      <li><a href="index.php?pagina=Bestellingen">Bestellingen</a></li>
                      <li><a href="index.php?pagina=UpdateEmployee">My Profile</a></li>
                    <?php } 
                
                    if(isset($_SESSION['user_id']) && $_SESSION['level'] == 3) {
                    ?>
                    <li><a href="index.php?pagina=AddArticle">Artikel Toevoegen</a></li>
                    <li><a href="index.php?pagina=RegisterEmployee">Medewerker Toevoegen</a></li>
                    <?php }
										if(!isset($_SESSION['level'])){
                        ?><li><a href="index.php?pagina=LoginEmployee">Medewerker Login</a></li><?php
                        } ;?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php

								// Voor zowel medewerker als klant
	              if (LoginCheck($pdo)) {
	                    ?>
	                    <li><a href="index.php?pagina=Uitloggen">Uitloggen</a></li>
	                <?php } else { ?>
	                    <li><a href="index.php?pagina=Login">Login</a></li>
	                    <li><a href="index.php?pagina=Register">Register</a></li>
          <?php }

								// te zien voor klant, niet voor medewerker
								if(isset($_SESSION['user_id']) && $_SESSION['level'] == 1) {
								?>
									<li><a href="index.php?pagina=MyProfile">My Profile</a></li>
									<li><a href="index.php?pagina=Cart">Winkelmand</a></li>
								<?php
								}	?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <?php
    if (isset($_GET["pagina"])) {
        $pagina = $_GET["pagina"];
        require("paginas/" . $pagina . '.php');
    }

    ?>
</div>
</body>
</html>
