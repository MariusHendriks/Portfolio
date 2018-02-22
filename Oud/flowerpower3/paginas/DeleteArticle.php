<?php
if(LoginCheck($pdo))
{
	// If-statement om te controleren of je admin bent
	if($_SESSION['level'] >= 3)
	{

    if(isset($_POST['delartikel']))
    {
      $artikel = $_POST['delartikel'];

      $parameters = array(':Artikel'=>$artikel);
      $sth = $pdo->prepare('SELECT factuurNummer FROM factuur_regels WHERE artikelID = :Artikel');
      $sth->execute($parameters);
      $facturen = $sth->fetchAll();


    
      if ($facturen == NULL){
          $parameters = array(':Artikel'=>$artikel);
          $sth = $pdo->prepare('DELETE from artikelen where artikelID = :Artikel');
          $sth->execute($parameters);
          echo 'verwijderd';
      }
      else{

          
      
      //Voor elke factuur als factuur regel 
      foreach ($facturen as $factuur) {
        //pak het factuurnummer van de array factuur
        $parameters = array(':factuurNummer'=>$factuur['factuurNummer']);
        //Pak alles van factuur waar het factuurnummer overeend komt met het factuurnummer uit de array
        $sth = $pdo->prepare('SELECT * FROM factuur WHERE factuurNummer = :factuurNummer');
        //Voer het uit
        $sth->execute($parameters);
        // voeg toe aan array
        $facturenn[] = $sth->fetchAll();
      }
      //Zet een teller op 0

      $teller = 0;  
      //
      foreach ($facturenn[$teller] as $factuurr) {
        if ($factuurr['afgehandeld'] == 0) {
          echo 'Kan het product niet verwijderen tot alle bestellingen met dit artikelnummer zijn verwerkt.';
        } else {
          $parameters = array(':Artikel'=>$artikel);
          $sth = $pdo->prepare('DELETE from artikelen where artikelID = :Artikel');
          $sth->execute($parameters);
          echo 'verwijderd';
        }
        $teller ++;
      }

    }
    }
  }
}



?>
