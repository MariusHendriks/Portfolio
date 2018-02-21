<div class="container">
	<div class="row">
		<div class="col-md-6">

				nieuw artikel toevoegen

				<div class="panel-body">

					<form name="GegevensFormulier" action="" method="post">
					<div class="form-group">
							<input class="btn btn-success" type="submit" name="Toevoegen" value="Toevoegen" />
						</div>
						<div class="form-group">
							<label for="naam">Artikel naam:</label>
							<input class="form-control" type="text" id="naam" name="naam" value="<?php echo $ArtikelNaam; ?>"/>
						</div>

						<div class="form-group">
							<label for="prijs">Prijs</label><br />
							<input class="form-control" type="text" id="prijs" name="prijs" value="<?php echo $Prijs; ?>" />
						</div>

						<div class="form-group">
							<input class="btn btn-success" type="submit" name="Toevoegen" value="Toevoegen" />
						</div>
					</form>
				</div>

		</div>
	</div>
</div>
