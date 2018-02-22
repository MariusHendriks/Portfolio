<h1>Onze Winkels:</h1>
<?php
	$sth = $pdo->prepare('select * from winkel');
	$sth->execute();
	$winkels = $sth->fetchAll();
?>

<div class="">
	<table class="table">
		<thead>
			<tr>
				<th>Winkelnaam</th>
				<th>Postcode</th>
				<th>Woonplaats</th>
				<th>Contactgegevens</th>
				<th>Openingstijden</th>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ($winkels as $locatie) {
				echo '<tr>';
				echo '<td>'.$locatie['winkelNaam'].'</td>';
				echo '<td>'.$locatie['winkelPostcode'].'</td>';
				echo '<td>'.$locatie['winkelWoonplaats'].'</td>';
				echo '<td>'.$locatie['winkelTelefoonnummer'].'<br>info@flowerpower.nl</td>';
				echo '<td> Ma/Vr: 09:00 - 18:00<br /> Zaterdag: 9:00 - 16:00<br/> Zondag: 12:00 - 16:00 </td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
	<h2><b>Op nationale feestdagen gesloten</b></h2>

	<h3>Winkel fotos's</h3>
	<h4>Flowerpower</h4>
	<img src="./img/store1.png">
	<h4>Piet Bloemist</h4>
	<img src="./img/store2.png">
	<h4>Bloemies</h4>
	<img src="./img/store3.png">
	<h4>BloemenWinkel</h4>
	<img src="./img/store4.png">

</div>
