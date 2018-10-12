<center>
	<h2> Liste des News </h2>
	<br/>
		<table border = 3>
			<tr><td> N° News </td> <td> N° Employé </td> 
			<td> Titre </td> <td> Contenu </td>
			<td> Parution </td>
				<td> Actions </td>
			</tr>
				<?php
				foreach ($resultats as $unResultat)
				{
					echo"<tr>
					<td>".$unResultat['idnews']."</td>
					<td>".$unResultat['idemploye']."</td>
					<td>".$unResultat['titre']."</td>
					<td>".$unResultat['contenu']."</td>
					<td>".$unResultat['parution']."</td>
					<td> 	<a href='index.php?page=2&action=X&idnews=".$unResultat['idnews']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=2&action=E&idnews=".$unResultat['idnews']."'>
							<img src='image/editer.png' width='80' height='80' > </a>
					</tr>";
				}
				?>
		</table>
			<br/>
				<h2>Ajout d'une News</h2>
				<form method="post" action="">
					<table border= 3 >
						<tr><td>N° Employé : </td> <td> <input type="text" name="idemploye" value="<?php if(isset($resultat)) echo $resultat['idemploye'] ; ?>"></td></tr>
						<tr><td>Titre : </td> <td> <input type="text" name="titre" value="<?php if(isset($resultat)) echo $resultat['titre'] ; ?>"></td></tr>
						<tr><td>Contenu : </td> <td> <input type="text" name="contenu" value="<?php if(isset($resultat)) echo $resultat['contenu'] ; ?>"></td></tr>
						<tr><td>Parution : </td> <td> <input type="date" name="parution" value="<?php if(isset($resultat)) echo $resultat['parution'] ; ?>"></td></tr>
						
						<tr><td> <input type="reset" name="Annuler" value="Annuler"></td>
						<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
						<input type="submit" name="Modifier" value="Modifier"></td></tr>
		</table>
					<input type="hidden" name="idnews" value="<?php if(isset($resultat)) echo $resultat['idnews'] ; ?>">
				</form>
</center>