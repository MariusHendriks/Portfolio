<?php
// haal gegevens op uit de array
$parameters = array(':factuurNummer'=> $_SESSION['factuurnummer'] );
//Zet klaar wat je wilt ophalen (allles)
$sth = $pdo->prepare('SELECT * FROM factuur WHERE factuurNummer = :factuurNummer');
//Voer de parameters uit die je op lijn 3 hebt meegegeven
$sth->execute($parameters);
//Fetch de factuurdetails
$factuurdetails = $sth->fetch();

// Vraag winkeldetails op
$parameters = array(':winkel'=> $factuurdetails['winkelNummer'] );
$sth = $pdo->prepare('SELECT * FROM winkel WHERE winkelNummer = :winkel');
$sth->execute($parameters);
$winkel = $sth->fetch();

// Vraag Klant op
$parameters = array(':klant'=> $factuurdetails['klantNummer'] );
$sth = $pdo->prepare('SELECT * FROM klanten WHERE GebruikersID = :klant');
$sth->execute($parameters);
$klant = $sth->fetch();

// Alle gegevens die op de factuur moeten komen, worden hier in de array genaamd
// '$factuurgegevens' gestopt door middel van verschillende query's
$parameters = array(':factuurNummer'=> $_SESSION['factuurnummer'] );
$sth = $pdo->prepare('SELECT artikelID, artikelAantal FROM factuur_regels WHERE factuurNummer = :factuurNummer');
$sth->execute($parameters);
$factuurregel = $sth->fetchAll();

//Zet de teller op 0, teller nodig om alle regels te kunnen echoeën
$tel = 0;
//Voor elke factuurregel, pak 
foreach ($factuurregel as $regel) {
  //pak het id waar de factuurregel overeenkomt
  $factuurgegevens[$tel]['id'] = $regel['artikelID'];
  //pak het aantal
  $factuurgegevens[$tel]['aantal'] = $regel['artikelAantal'];
  $tel++;
}
//Teller om alles te kunnen echoeën
$tel2 = 0;
//Voor elk factuurgegevens die er is, voer de for each uit
foreach ($factuurgegevens as $factuurgegeven) {
  //Kijk naar het artikelid en check het factuurgegeven
  $parameters = array(':artikelid'=> $factuurgegeven['id'] );
  // Pak alles uit de database waar het artikelnummer overeen komt
  $sth = $pdo->prepare('SELECT * FROM artikelen WHERE artikelID = :artikelid');
  //Voer de parameters uit
  $sth->execute($parameters);
  //Pak alles uit artikelen waar het artikelnummer overeen komt
  $artikel = $sth->fetchAll();
  //pak artikel naam
  $factuurgegevens[$tel2]['naam'] = $artikel[0]['naam'];
  //Pak artikel prijs
  $factuurgegevens[$tel2]['prijs'] = $artikel[0]['prijs'];
  //Totaalprijs berekenen
  $factuurgegevens[$tel2]['totaal'] = ($artikel[0]['prijs'] * $factuurgegevens[$tel2]['aantal']);
  //Tel optellen
  $tel2++;
}

//Bereken de totaalprijs d.m.v. foreach
$totaal = 0;
foreach ($factuurgegevens as $artikelprijs) {
  $totaal = $totaal + $artikelprijs['totaal'];
}

?>

<div class="">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2>Factuur</h2>
        <?php
        echo '<p><b>Af te halen:</b><br>';
          echo $winkel['winkelNaam'].'<br>';
          echo $winkel['winkelPostcode'].'<br>';
          echo $winkel['winkelWoonplaats'].'<br>';
          echo $winkel['winkelTelefoonnummer'].'<br><p>';
        ?>
        <div class=" ">
          <div class=" ">
            <b>Factuur</b> #<?=$factuurdetails['factuurNummer']?><br>
            <b>Datum:</b> <?=$factuurdetails['factuurDatum']?><br>
            <b>Klant:</b> <?=$klant['Naam']?>
          </div>
          <table class="table table-striped">
            <thead>
              <th>ID</th>
              <th>Naam</th>
              <th>Stuksprijs</th>
              <th>Aantal</th>
              <th>Totaal</th>
            </thead>
            <tbody>
              <?php
                foreach ($factuurgegevens as $artikel) {
                  echo '<tr>';
                    echo '<th>'.$artikel['id'].'</th>';
                    echo '<td>'.$artikel['naam'].'</td>';
                    echo '<td>€'.$artikel['prijs'].'</td>';
                    echo '<td>'.$artikel['aantal'].'</td>';
                    echo '<td>€'.$artikel['totaal'].'</td>';
                  echo '</tr>';
                }
              ?>
              <tr>
                <th>TOTAAL: €<?php echo $totaal;?></th>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" name="print" class="btn btn-success" onClick="window.print();"> print factuur uit</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
// Helemaal aan het einde wordt alles ge-unset.
unset ($_SESSION['factuurnummer'], $_SESSION['productTeller'], $_SESSION['artikelID'], $_SESSION['Bestelling']);
?>
