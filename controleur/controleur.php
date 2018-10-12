<?php

include("modele/modele.php");

function selectAllc($table)
{
	if($table =="evenement" || $table =="employe" || $table =="news" || $table =="produit")
	{
		$resultat = selectAllM($table);
		return $resultat;
	}
	else
	{
		return null;
	}
}
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
function insertEventC ($tab)
	{
		//verification des données
		insertEventModel($tab);
	}

	function deleteEventC ($idevent)
	{
		//verification de l'idEvent
		deleteEventModel ($idevent);
	}

	function selectWhereIdEventC ($idevent)
	{
		//verification de l'idEvent

		$resultat = selectWhereIdEventModel ($idevent);
		return $resultat;
	}

	function updateEventC ($tab)
	{
		updateEventModel ($tab);
	}

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
	function insertNewsC ($tab)
	{
		insertNewsModel($tab);
	}

	function deleteNewsC ($idnews)
	{
		deleteNewsModel ($idnews);
	}

	function selectWhereIdNewsC ($idnews)
	{
		$resultat = selectWhereIdNewsModel ($idnews);
		return $resultat;
	}

	function updateNewsC ($tab)
	{
		updateNewsModel ($tab);
	}
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
	function insertProduitC ($tab)
	{
		insertProduitModel($tab);
	}

	function deleteProduitC ($idproduit)
	{
		deleteProduitModel ($idproduit);
	}

	function selectWhereIdProduitC ($idproduit)
	{
		$resultat = selectWhereIdProduitModel ($idproduit);
		return $resultat;
	}

	function updateProduitC ($tab)
	{
		updateProduitModel ($tab);
	}
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

	function insertEmployeC ($tab)
    {
        insertEmployeModel($tab);
    }

	function deleteEmployeC ($idemploye)
	{
		deleteEmployeModel ($idemploye);
	}

	function selectWhereIdEmployeC ($idemploye)
	{
		$resultat = selectWhereIdEmployeModel ($idemploye);
		return $resultat;
	}

	function updateEmployeC ($tab)
	{
		updateEmployeModel ($tab);
	}