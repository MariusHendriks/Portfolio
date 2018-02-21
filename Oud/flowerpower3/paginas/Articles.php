<div class="row">
<?php

		$sth = $pdo->prepare('select * from artikelen');
		$sth->execute();

		// Voor elk gerecht de volgende code uitvoeren:
		while($row = $sth->fetch())
		{
			$_SESSION['artikelID'] = $row['artikelID']; ?>

			<div class="row">

				<div class="col-md-6">
					<h4><?= $row['naam']?></h4>
					<b>Prijs:</b> &euro; <?=$row['prijs']?><br>
				</div>

				<div class="col-md-3">
					<div class="row">
					<?php if(LoginCheck($pdo)) { ?>
						<form class="small-form" name="AddArticle" action="?pagina=Cart" method="post">
							<input type="number" class="form-control" name="gekozenAantal" value="1">
							<button class="btn btn-default" type="submit" name="AddArticle">Bestellen</button>
							<input type="hidden" name="gekozenArtikel" value='<?=$row['artikelID']?>'>
						</form>
					<?php } ?>
					</div>


					<div class="row">
					<?php
					// Als je het level van beheerder hebt, dan:
					if(isset($_SESSION['level']) && $_SESSION['level'] >= 3)
					{ ?>
						<form name="BewerkenArtikelFormulier" action="?pagina=EditArticle" method="post">
							<button class="btn btn-primary" type="submit" name="BewerkenArtikel">Bewerken</button>
							<input type="hidden" name="BewerkenArtikelVeld" value='<?=$_SESSION['artikelID']?>'>
						</form>

						<form name="delartikel" action="?pagina=DeleteArticle" method="post">
							<input type="hidden" name="delartikel" value='<?=$_SESSION['artikelID']?>'>
							<button class="btn btn-primary" type="submit" value='<?=$_SESSION['artikelID']?>' name="delartikel">Verwijderen</button>
						</form>
					<?php } ?>
					</div>
				</div>
			</div>
			<br />
			<br />

			<?php	} ?>
	</div>
</div>
