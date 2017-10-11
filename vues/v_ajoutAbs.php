<div id="contenu">
	<h3 style="text-align: center;">Ajouter une Abscence</h3>
	<form method='POST' action='index.php?uc=gererAbs&action=validerAjoutAbs'>
		<table class='tabNonQuadrille'>

			<tr>
				<td><i class="fa fa-calendar" aria-hidden="true"></i></td>
				<td>
					<input  type='text' name=dateDebut placeholder="Date de début" class="datepicker" size='30' maxlength='45'>
				</td>
			</tr>
			<tr>
				<td><i class="fa fa-calendar" aria-hidden="true"></i></td>
				<td>
					<input  type='text' name=dateFin  placeholder="Date de fin" class="datepicker" size='30' maxlength='45'>
				</td>
			</tr>
				
				Motif 
			    <select class="form-control" name="code">
			       <?php 

				       $refMotif = $bdd->query('SELECT code, libelle
				          FROM Motif
				          ORDER BY libelle');

				        while ($motif = $refMotif->fetch()) {
					        $code = $motif["code"];
					        $libelle = $motif["libelle"]; ?>
					        <option value="<?=$code?>"><?=$libelle?></option>';
					        <?php 
					    }; 
				        $refMotif->closeCursor();

			        ?>
			    </select>
		</table>

		<div style="position: relative;left: 50%; width: 200px; margin-left: -100px; margin-top: 20px; text-align: center;">
			<input type='submit' value='Valider' name='valider' style="margin: 10px;">
			<input type='reset' value='Annuler' name='annuler' style="margin: 10px;">
		</div>
		

	</form>
</div>
