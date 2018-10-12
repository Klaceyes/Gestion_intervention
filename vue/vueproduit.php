<center>
	<h2> Liste des Produits </h2>
	<br/>
	<table border = 3>
		<tr><td> N° Produit </td>
			<td> N° Employé </td>
			<td> Nom </td>
			<td> Libellé </td> 
			<td> Évaluation </td> 
			<td> Parution </td>
			<td> Actions </td>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['idproduit']."</td>
				<td>".$unResultat['idemploye']."</td>
				<td>".$unResultat['nom']."</td>
				<td>".$unResultat['libelle']."</td>
				<td>".$unResultat['evaluation']."</td>
				<td>".$unResultat['parution']."</td>

				<td> 	<a href='index.php?page=3&action=X&idproduit=".$unResultat['idproduit']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=3&action=E&idproduit=".$unResultat['idproduit']."'>
							<img src='image/editer.png' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'un Produit</h2>
				<form method="post" action="">

					<table border= 3 >
						<tr><td>N° Employé : </td> <td> <input type="text" name="idemploye" value="<?php if(isset($resultat)) echo $resultat['idemploye'] ; ?>"></td></tr>
						<tr><td>Nom : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
						<tr><td>Libellé : </td> <td> <input type="nom" name="libelle" value="<?php if(isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
						<tr><td>Commentaire : </td> <td> <input type="text" name="evaluation" value="<?php if(isset($resultat)) echo $resultat['evaluation'] ; ?>"></td></tr>
						<tr><td>Date de publication : </td> <td> <input type="date" name="parution" value="<?php if(isset($resultat)) echo $resultat['parution'] ; ?>"></td></tr>
						
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="idproduit" value="<?php if(isset($resultat)) echo $resultat['idproduit'] ; ?>">
				</form>
</center>
