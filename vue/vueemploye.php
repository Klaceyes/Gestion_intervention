<center>
	<h2> Liste du Personnel </h2>
	<br/>
	<table border = 3>
		<tr><td> N° Employé </td>
			<td> Nom </td> <td> Prénom </td>
			<td> Adresse </td> <td> Date de naissance </td>
			<td> Email </td> <td> Qualification </td> 
			<td> Actions </td>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['idemploye']."</td>
				<td>".$unResultat['nom']."</td>
				<td>".$unResultat['prenom']."</td>
				<td>".$unResultat['adresse']."</td>
				<td>".$unResultat['datenaissance']."</td>
				<td>".$unResultat['email']."</td>
				<td>".$unResultat['qualification']."</td>

				<td> 	<a href='index.php?page=4&action=X&idemploye=".$unResultat['idemploye']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=4&action=E&idemploye=".$unResultat['idemploye']."'>
							<img src='image/editer.png' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'un Employé</h2>
				<form method="post" action="">

					<table border= 3 >
						<tr><td>Nom : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
						<tr><td>Adresse : </td> <td> <input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
						<tr><td>Date de naissance : </td> <td> <input type="date" name="datenaissance" value="<?php if(isset($resultat)) echo $resultat['datenaissance'] ; ?>"></td></tr>
						<tr><td>Email : </td> <td> <input type="text" name="email" value="<?php if(isset($resultat)) echo $resultat['email'] ; ?>"></td></tr>
						<tr><td>Qualification : </td> <td> <input type="text" name="qualification" value="<?php if(isset($resultat)) echo $resultat['qualification'] ; ?>"></td></tr>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="idemploye" value="<?php if(isset($resultat)) echo $resultat['idemploye'] ; ?>">
				</form>
</center>