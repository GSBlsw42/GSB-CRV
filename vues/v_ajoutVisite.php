<div id="contenu">
	<h3 style="text-align: center;">Ajouter une visite</h3>
	<form method='POST' action='index.php?uc=gererVisite&action=validerAjoutVisite'>
	
		<select class="form-control" name="praticien">
			<?php 
				$praticien = $bdd->query('SELECT id, refCode, nom
				          					FROM Praticien
				         					ORDER BY nom');

				while ($praticien = $praticien->fetch()) {
					$id = $praticien["id"];
					$refCode = $praticien["refCode"];
					$nom = $praticien['nom']; ?>
					<option value="<?=$id?>"><?=$nom?></option>
			<?php 
				};
				$refMotif->closeCursor();
			?>
			    </select>
			  

		<table class='tabNonQuadrille'>
			<tr>
				<td><i class="fa fa-calendar" aria-hidden="true"></i></td>
				<td>
					<input  type='text' name=dateDebut placeholder="Date fin de visite" class="datepicker" size='30' maxlength='45'>
				</td>
			</tr>
			<tr>
				<select class="form-control" name="code">
				    <?php 
				    	/*
					    $nomPraticien= $bdd->query('SELECT code, libelle
					       FROM Motif
					       ORDER BY libelle');

					     while ($motif = $refMotif->fetch()) {
						     $code = $motif["code"];
						     $libelle = $motif["libelle"]; ?>
						     <option value="<?=$code?>"><?=$libelle?></option>';
						     <?php 
						 }; 
					     $refMotif->closeCursor();
						*/
				     ?>
				</select>
			</tr>
		</table>

		<div style="position: relative;left: 50%; width: 200px; margin-left: -100px; margin-top: 20px; text-align: center;">
			<input type='submit' value='Valider' name='valider' style="margin: 10px;">
			<input type='reset' value='Annuler' name='annuler' style="margin: 10px;">
		</div>
		

	</form>
</div>
