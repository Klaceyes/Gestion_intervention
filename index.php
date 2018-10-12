<?php
	include("controleur/controleur.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="css/bootrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<title> Site SNCF </title>
</head>
<body>
	<header class="container-fluid header">
		<div class="container">
		<img src="image/logo_sncf.png" class="logo" />
		<nav class="menu">
			<a href="index.php?page=1"> Client
			</a>
			<a href="index.php?page=2"> Technicien
			</a>
			<a href="index.php?page=3"> Intervention
			</a>
		</nav>
	</div>			
	</header>
	</center>
<?php
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}else{
			$page = 0;
		}
		switch ($page) 
		{



			case 1:
				if(isset($_GET['action']) && isset($_GET['idevenement']))
					{
						$action = $_GET['action'];
						$idevenement = $_GET['idevenement'];
						if($action == "X")
						{
							deleteEventC($idevenement);
						}
						else if ($action == "E")
						{
							$resultat = selectWhereIdEventC ($idevenement);
							
						}
					}

					if(isset($_POST['Modifier']))
					{
						updateEventC($_POST) ;
						$resultat = null;
					}

					if(isset($_POST["Enregistrer"]))
					{
						insertEventC($_POST);
					}
					
					$resultats = selectAllC("evenement");
					include("vue/vueeven.php");
			break;
				


			
			case 2:

					if(isset($_GET['action']) && isset($_GET['idnews']))
					{
						$action = $_GET['action'];
						$idnews = $_GET['idnews'];
						if($action == "X")
						{
							deleteNewsC($idnews);
						}
						else if ($action == "E")
						{
							$resultat = selectWhereIdNewsC ($idnews);
							
						}
					}

					if(isset($_POST['Modifier']))
					{
						updateNewsC($_POST) ;
						$resultat = null;
					}

					if(isset($_POST["Enregistrer"]))
					{
						insertNewsC($_POST);
					}
					
			$resultats = selectAllC("news");
				include("vue/vuenews.php");
			break;

			case 3:

			if(isset($_GET['action']) && isset($_GET['idproduit']))
					{
						$action = $_GET['action'];
						$idproduit = $_GET['idproduit'];
						if($action == "X")
						{
							deleteProduitC($idproduit);
						}
						else if ($action == "E")
						{
							$resultat = selectWhereIdProduitC ($idproduit);
							
						}
					}

					if(isset($_POST['Modifier']))
					{
						updateProduitC($_POST) ;
						$resultat = null;
					}

					if(isset($_POST["Enregistrer"]))
					{
						insertProduitC($_POST);
					}

			$resultats = selectAllC("produit");
				include("vue/vueproduit.php");
			break;
			
		}
	?>
</body>
</html>