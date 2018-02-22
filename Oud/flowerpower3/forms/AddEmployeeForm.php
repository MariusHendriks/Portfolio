
        <div class="col-md-6 col-md-offset-3">
            <form name="RegistratieFormulier" action="" method="post">
                <div class="row">
                        <div class="form-group">
                            <label for="firstname">Voornaam + achternaam</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $Naam; ?>" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Gebruikersnaam</label>
                            <input type="text" id="username" name="username" class="form-control" required="required" value="<?php echo $Username; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" id="password" name="password" class="form-control" required="required" value="<?php echo $Wachtwoord; ?>"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="RegistratieFormulier">
                                Submit
                            </button>
                        </div>
                </div>

            </form>
        </div>
