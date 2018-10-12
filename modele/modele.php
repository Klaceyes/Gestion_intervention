<?php

function connexion()
{
	$con = mysqli_connect("localhost","root","","fcns");
	return $con;
}

function deconnexion($con)
{
	mysqli_close($con);
}
function selectAllM($table)
{
	//on se connecte sur la base de données 
        $con = connexion();
        $requete ="select * from " .$table. ";";

        

        $resultat = mysqli_query($con,$requete);
        deconnexion($con);
        return $resultat;	
}
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
function insertEventModel ($tab)
    {
        $con = connexion();
        $requete = "insert into evenement values
            (
            null,
            '".$tab["idemploye"]."',
            '".$tab["nom"]."',
            '".$tab["datedebut"]."',
            '".$tab["datefin"]."',
            '".$tab["libelle"]."',
            '".$tab["commentaire"]."',
            '".$tab["parution"]."'
        );";
       

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteEventModel ($idevenement)
    {
        $con = connexion();
        $requete = "delete from evenement where idevenement = ".$idevenement.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdEventModel ($idevenement)
    {
        $con = connexion();
        $requete = "select * from evenement where idevenement = ".$idevenement.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        deconnexion($con);

        return $ligne;
    }

    function updateEventModel ($tab)
    {
        $con = connexion();
        $requete = 
        "update evenement
        set 
        idevenement =     '".$tab['idevenement'].       "', 
        nom =           '".$tab['nom'].             "',
        datedebut =     '".$tab['datedebut'].       "',
        datefin =       '".$tab['datefin'].         "',
        libelle =       '".$tab['libelle'].         "',
        commentaire =   '".$tab['commentaire'].     "',
        parution =      '".$tab['parution']."' 

        where idevenement = ".$tab['idevenement'].";";
        

    

        mysqli_query($con, $requete);
        deconnexion($con);
    }
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
 function insertNewsModel ($tab)
    {
        $con = connexion();
        $requete =  "insert into news values
                    (null,
                    '".$tab["idemploye"]."',
                    '".$tab["titre"]."',
                    '".$tab["contenu"]."',
                    '".$tab["parution"]."'
                    );";
                   

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteNewsModel ($idnews)
    {
        $con = connexion();
        $requete = "delete from news where idnews = ".$idnews.";";
         
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdNewsModel ($idnews)
    {
        $con = connexion();
        $requete = "select * from news where idnews = ".$idnews.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        deconnexion($con);

        return $ligne;
    }
    
    function updateNewsModel ($tab)
    {
        $con = connexion();
        $requete = "update news set 
        idnews =                 '".$tab['idnews']."', 
        titre=                      '".$tab['titre']."',
        contenu=                    '".$tab['contenu']."', 
        parution=                   '".$tab['parution']."' 
        where idnews =              '".$tab['idnews']."';";
       

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
 function insertProduitModel ($tab)
    {
        $con = connexion();
        $requete = "insert into produit values
                    (null,
                    '".$tab["idemploye"]."',
                    '".$tab["nom"]."',
                    '".$tab["libelle"]."',
                    '".$tab["evaluation"]."',
                    '".$tab["parution"]."'
                    );";
                    

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteProduitModel ($idproduit)
    {
        $con = connexion();
        $requete = "delete from produit where idproduit = ".$idproduit.";";
        
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdProduitModel ($idproduit)
    {
        $con = connexion();
        $requete = "select * from produit where idproduit  = ".$idproduit.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        deconnexion($con);

        return $ligne;
    }
    
    function updateProduitModel ($tab)
    {
        $con = connexion();
        $requete = "update produit set
        idproduit =                 '".$tab['idproduit']."', 
        nom=                        '".$tab['nom']."',
        libelle=                    '".$tab['libelle']."', 
        evaluation=                 '".$tab['evaluation']."', 
        parution=                   '".$tab['parution']."' 
        where idproduit =           '".$tab['idproduit']."';";
       

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
function insertEmployeModel ($tab)
    {
        $con = connexion();
        $requete = 

            "insert into employe values 
            (
            null, 
            '".$tab["nom"]."',
            '".$tab["prenom"]."',
            '".$tab["adresse"]."', 
            '".$tab["datenaissance"]."', 
            '".$tab["email"]."', 
            '".$tab["qualification"]."'
            );";
           
        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteEmployeModel ($idemploye)
    {
        $con = connexion();
        $requete = "delete from employe where idemploye = ".$idemploye.";";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdEmployeModel ($idemploye)
    {
        $con = connexion();
        $requete = "select * from employe where idemploye = ".$idemploye.";";

        

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        deconnexion($con);
        return $ligne;
    }
    
    function updateEmployeModel ($tab)
    {
        $con = connexion();
        $requete = 
        "update employe 
        set 
        nom =                   '".$tab['nom']."',
        prenom =                '".$tab['prenom']."',
        adresse =               '".$tab['adresse']."',
        datenaissance =         '".$tab['datenaissance']."',
        email =                 '".$tab['email']."',
        qualification =         '".$tab['qualification']."'
                        
        where idemploye = ".$tab['idemploye'].";";
        echo $requete;

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }
?>