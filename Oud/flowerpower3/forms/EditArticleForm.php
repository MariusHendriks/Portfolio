<div class="container">
	<div class="row">
		<div class="col-md-6">


					Bewerken artikel


					<form name="GegevensFormulier" action="" method="post">
							<div class="form-group">
							<button class="btn btn-success" type="submit" name="Bewerken">Bewerken</button>
						</div>
						<div class="form-group">
							<label for="artikelnaam">Titel:</label><br />
							<input class="form-control" type="text" id="naam" name="naam" value="<?php echo $ArtikelNaam; ?>"/>
						</div>


						<div class="form-group">
							<label for="prijs">Prijs</label>
							<input class="form-control" type="text" id="prijs" name="prijs" value="<?php echo $ArtikelPrijs; ?>" />
						</div>


						<div class="form-group">
							<button class="btn btn-success" type="submit" name="Bewerken">Bewerken</button>
						</div>
						
					</form>


		</div>
	</div>
</div>
