<center>
	<h2> Liste des Événements </h2>
	<br/>
	<table border = 3>
		<tr><td> N° Événement </td> <td> N° Employé </td>
			<td> Nom </td> <td> Date de début </td>
			<td> Date de fin </td> <td> Libellé </td> <td> Commentaire </td>
			<td> Date de parution </td>
			<td> Actions </td>
			</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['idevenement']."</td>
				<td>".$unResultat['idemploye']."</td>
				<td>".$unResultat['nom']."</td>
				<td>".$unResultat['datedebut']."</td>
				<td>".$unResultat['datefin']."</td>
				<td>".$unResultat['libelle']."</td>
				<td>".$unResultat['commentaire']."</td>
				<td>".$unResultat['parution']."</td>
				<td> 	<a href='index.php?page=1&action=X&idevenement=".$unResultat['idevenement']."'>
						<img src='image/supprimer.png' width='80' height='80' > </a>
						<a href='index.php?page=1&action=E&idevenement=".$unResultat['idevenement']."'>
						<img src='image/editer.png' width='80' height='80' > </a>
				</tr>";
			}
			?>
			<table>

		<h2>Ajout d'un Événement </h2>
		<form method="post" action="">
			<table border= 3 >
				<tr><td>N° Employé : </td> <td> <input type="text" name="idemploye" value="<?php if(isset($resultat)) echo $resultat['idemploye'] ; ?>"></td></tr>
				<tr><td>Nom de l'Événement : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
				<tr><td>Début : </td> <td> <input type="date" name="datedebut" value="<?php if(isset($resultat)) echo $resultat['datedebut'] ; ?>"></td></tr>
				<tr><td>Fin : </td> <td> <input type="date" name="datefin" value="<?php if(isset($resultat)) echo $resultat['datefin'] ; ?>"></td></tr>
				<tr><td>Libellé : </td> <td> <input type="text" name="libelle" value="<?php if(isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
				<tr><td>Commentaire : </td> <td> <input type="text" name="commentaire" value="<?php if(isset($resultat)) echo $resultat['commentaire'] ; ?>"></td></tr>
				<tr><td>Parution : </td> <td> <input type="date" name="parution" value="<?php if(isset($resultat)) echo $resultat['parution'] ; ?>"></td></tr>

				<tr><td> <input type="reset" name="Annuler" value="Annuler"></td>
				<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
				<input type="submit" name="Modifier" value="Modifier"></td></tr>
			</table>
			<input type="hidden" name="idevenement" value="<?php if(isset($resultat)) echo $resultat['idevenement'] ; ?>">
		</form>
</center>