<div class="row">
	<?php require('./php/Bestellen.php');?>
	<?php
		// Controle of je nog bent ingelogd
		if(LoginCheck($pdo))
		{
			// Als een artikel toegevoegd wordt aan de bestellijst:
			if(isset($_POST['AddArticle']))
			{
				// Kijk of er uberhaupt een productteller bestaat, en of die leeg is ja of de nee.
				if(!isset($_SESSION['productTeller']) || (empty($_SESSION['productTeller'])))
		    {
		        $_SESSION['productTeller'] = 0;
		    }

				// Zet het gekozen Artikel in je winkelmand.
				// Dit is een grote (lastig te lezen) array...
		    $_SESSION['Bestelling'][$_SESSION['productTeller']]['artikelnr'] = $_POST['gekozenArtikel'];
		    $_SESSION['Bestelling'][$_SESSION['productTeller']]['aantal'] = $_POST['gekozenAantal'];
				// Tel 1 op bij de teller:
		    $_SESSION['productTeller']++;

				// De pagina wordt gerefreshed
				header("Refresh:0");
			}
			else
			{
			//het totaalbedrag variabele begint leeg.
			$totaal = NULL;
			?>
			<div class="col-md-6">
				<?php
				// Als er niets in de Bestelling array zit, dan:
				if(empty($_SESSION['Bestelling']))
				{
					echo 'uw winkelmand is leeg.';
				}
				else
				{?>
					<div class="" >
						<div class="" >winkelmand</div>
						<table>
							<thead>
								<tr>
									<th>Artikelnaam</th>
									<th>Prijs</th>
									<th>Aantal</th>
									<th>Subtotaal</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($_SESSION['Bestelling'] as $artikel)
								{
									// Stop de variabele hierin, voor in de query.
									$artikelid = $artikel['artikelnr'];

									// Haal eerst alle bestellingen op
									$sth = $pdo->prepare('SELECT naam, prijs FROM artikelen WHERE artikelID = '.$artikelid.'');
									$sth->execute();
									$bestelling = $sth->fetch(); ?>

									<tr>
										<td><?=$bestelling['naam']?></td>
										<td>&euro;<?=$bestelling['prijs']?></td>
										<td>x<?=$artikel['aantal']?></td>
										<td><?=($artikel['aantal'] * $bestelling['prijs'])?></td>
									</tr>
									<?php
									$totaal = $totaal + ($artikel['aantal'] * $bestelling['prijs']);
								}?>
								<tr>
									<th>Totaalbedrag: €<?=$totaal?></th>
									<th></th>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
				}?>
			</div>

			<div class="col-md-12">
				<?php

				// Vraag alle gegevens over de gebruiker op uit de database:
				$sth = $pdo->prepare('SELECT Naam, Adres, Gebruikersnaam, Plaats, Postcode FROM klanten WHERE GebruikersID = '.$_SESSION['user_id'].'');
				$sth->execute();
				$usergegevens = $sth->fetch();


				// Hulpvariabelen voor makkelijker gebruik
				$naam = $usergegevens['Naam'];
				$adres = $usergegevens['Adres'];
				$gebruikersnaam = $usergegevens['Gebruikersnaam'];
				$plaats = $usergegevens['Plaats'];
				$postcode = $usergegevens['Postcode'];
				?>

			  <table>
					<tbody>
						<tr>
							<th><b>Uw naam: <b><br /></th>
							<th><b>Adres: </b><br /></th>
							<th><b>Postcode en plaats: </b><br /></th>
						</tr>
						<tr>
							<td><?= $naam ?></td>
							<td><?= $adres ?></td>
							<td><?= $plaats.' '.$postcode ?></td>
						</tr>
					</tbody>
			  </table>

				<a class="btn btn-default" href=index.php?pagina=usergegevens>Uw Gegevens Aanpassen</a>

				<div class="row">
					<div class="col-md-12">
						<p>Totaal bedrag:
							<?php if ($totaal == NULL)
							{
								echo '€0';
							}
							else {
								echo '€ '.$totaal;
							} ?>

						<form class="small-form" name="Delete" action="" method="post">
							<button class="btn btn-default" type="submit" name="Delete">maak winkelmandje leeg</button>
						</form>
					</div>

					<div class="col-md-6">
						<form name="BestellingPlaatsenForm" action="" method="post">
							<label for="winkel">kies een winkel om de bestelling op te halen:</label>
								<select class="form-control" name="winkel">
									<?php
										$sth = $pdo->prepare('select * FROM winkel');
										$sth->execute();
										$result = $sth->fetchAll();
										// zet alle winkels in een option
				            foreach($result as $winkel) {
				                echo '<option value="'.$winkel[0].'"> '.$winkel[1].' </option>';
				            }
									?>
								</select>
							<button class="btn btn-success" type="submit" name="BestellingPlaatsen">bestellen</button>
						</form>
					</div>
				</div>
				<?php
				}
			}?>
	</div>
</div>
