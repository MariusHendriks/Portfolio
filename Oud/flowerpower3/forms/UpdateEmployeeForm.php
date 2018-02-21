<div class="row">
	<div class="col-md-7">

		  <div class=" ">Bewerk mijn gegevens</div>

		  <div class="panel-body">
				<form name="GegevensFormulier" action="" method="post">
					<div class="form-group">
						<label for="Name">Volledige Naam:</label><br />
						<input class="form-control" type="text" id="Name" name="Name" value="<?php echo $Name; ?>" />
					</div>

          <div class="form-group">
            <label for="Name">password:</label><br />
            <input class="form-control" type="password" id="Password" name="Password" />
          </div>

          <div class="form-group">
            <button class="btn btn-info" type="submit" name="Verwijder">Verwijder Account</button>
          </div>

					<div class="form-group">
						<button class="btn btn-success" type="submit" name="Wijzigen">Wijzigen</button>
						<a class="btn btn-danger" href="index.php?pagina=Homepage">Annuleren</a>
					</div>
				</form>
		  </div>

	</div>
</div>
