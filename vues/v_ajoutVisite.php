<div id="contenu">
	<h3 style="text-align: center;">Ajouter une visite</h3>
	<form method='POST' action='index.php?uc=gererVisite&action=validerAjoutVisite'>
		<p>Praticien visité :</p>
		<select class="form-control" name="praticien">
			<?php
				$refPraticien = $bdd->query('SELECT id, refCode, nom, code, libelle
												FROM Praticien, Specialite
												WHERE code = refCode
												ORDER BY nom');

				while ($praticien = $refPraticien->fetch()) {
					$id = $praticien["id"];
					$refCode = $praticien["refCode"];
					$nom = $praticien['nom'];
					$libelle = $praticien['libelle'] ?>
					<option value="<?=$id?>"><?=$nom?> : <?=$libelle?></option>
			<?php
				};
				$refPraticien->closeCursor();
			?>
		</select>

		<br>
		<p>Sélectionnez la date de la fin de la visite : </p>

					<input  type='text' name=dateFin placeholder="Date fin de visite" class="datepicker" size='30' maxlength='45'>
		<br>
		<p>Niveau d'interêt du praticien durant la visite : </p>
		<select class = "form-control" name="interet">
		<?php
		 for ($i=0; $i < 6; $i++) { ?>
		 	<option value="<?=$i?>"><?=$i?></option>
		<?php }
		?>
		</select>

		<div style="position: relative;left: 50%; width: 200px; margin-left: -100px; margin-top: 20px; text-align: center;">
			<input type='submit' value='Valider' name='valider' style="margin: 10px;">
			<input type='reset' value='Annuler' name='annuler' style="margin: 10px;">
		</div>


	</form>
</div>
