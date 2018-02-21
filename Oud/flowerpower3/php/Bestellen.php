<?php
// Als je op de knop 'Bestellen' klikt, dan:
if(isset($_POST['BestellingPlaatsen']))
{
  // Kijk of er iets in de winkelmand zit
  if(!empty($_SESSION['Bestelling']))
  {
    // Genereer eerst een nieuw factuurnummer
    $sth = $pdo->prepare('SELECT MAX(factuurNummer) FROM factuur_regels');
    $sth->execute();
    $row = $sth->fetch();
    // Stop de MAX count van de query in een variabele:
    $factuurnummer = $row[0];
    // Zet ordernummer op 0 als het nog niet bestaat (leeg is dus)
    if(!isset($factuurnummer)) { $factuurnummer = 0; }
    // Tel 1 bij op
    $factuurnummer++;

    // Voor elke bestelling:
    foreach($_SESSION['Bestelling'] as $besteldartikel)
    {
      $parameters = array(
                ':factuurNummer' => $factuurnummer,
                ':artikelID' => $besteldartikel['artikelnr'],
                ':artikelAantal' => $besteldartikel['aantal']
                );

      $sth = $pdo->prepare('INSERT INTO factuur_regels (factuurNummer, artikelID, artikelAantal) VALUES (:factuurNummer, :artikelID, :artikelAantal)');
      $sth->execute($parameters);
    }

    // Insert de gegenereerde factuur into de dasta🅱ase
    // Deze staat natuurlijk niet in een loop
    $parameters = array(
              ':factuurNummer' => $factuurnummer,
              ':factuurDatum' => date("Y-m-d H:i:s"),
              ':winkelNummer' => $_POST['winkel'],
              ':klantNummer' => $_SESSION['user_id'],
              ':medewerkerNummer' => '',
              ':afgehandeld' => 0
              );

    $sth = $pdo->prepare('INSERT INTO factuur (factuurNummer, factuurDatum, winkelNummer, klantNummer, medewerkerNummer, afgehandeld) VALUES (:factuurNummer, :factuurDatum, :winkelNummer, :klantNummer, :medewerkerNummer, :afgehandeld)');
    $sth->execute($parameters);

    // Klaar. Zet het factuurnummer tijdelijk in de session,
    // zodat hij kan worden meegenomen naar de factuurpagina.
    $_SESSION['factuurnummer'] = $factuurnummer;

    header("Refresh: 5;URL=index.php?pagina=Factuur");
  }
  else
  {	// Waarschuwing dat je winkelmand nog leeg is
    ?>
    Uw bestellijst is nog leeg!
    <?php header("Refresh: 5;URL=index.php?pagina=Cart");
  }
}
else
{
  // Als er op delete is gedrukt, de bestelling leegmaken:
  if(isset($_POST['Delete']))
  {
    $_SESSION['Bestelling'] = NULL;
    header("Refresh: 0;URL=index.php?pagina=Cart");
  }
}
?>
