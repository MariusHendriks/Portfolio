<div class="row">
	<div class="col-md-7">

		  <div class=" ">Bewerk mijn gegevens</div>

		  <div class="panel-body">
				<form name="GegevensFormulier" action="" method="post">
					<div class="form-group">
						<label for="Name">Volledige Naam:</label><br />
						<input class="form-control" type="text" id="Name" name="Name" value="<?php echo $Name; ?>" required="required" />
					</div>

					<?php if($_SESSION['level'] == 1) { ?>
					<div class="form-group">
						<label for="Adres">Adres:</label><br />
						<input class="form-control" type="text" id="Adres" name="Adres" value="<?php echo $Adres; ?>" required="required" />
					</div>

					<div class="form-group">
								<label for="City">Woonplaats:</label><br />
								<input class="form-control" type="text" id="City" name="City" value="<?php echo $City; ?>" required="required" />
								<label for="ZipCode">Postcode:</label><br />
								<input class="form-control" type="text" id="ZipCode" name="ZipCode" value="<?php echo $ZipCode; ?>" required="required" />
						</div>
					</div>
					<?php } ?>

					<div class="form-group">
						<button class="btn btn-success" type="submit" name="Wijzigen">Wijzigen</button>
						<a class="btn btn-danger" href="index.php?pagina=Homepage">Annuleren</a>
					</div>
				</form>
		  </div>

	</div>
</div>
