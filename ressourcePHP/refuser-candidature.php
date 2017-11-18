<?php
	require_once('requeteur.class.php');
	require_once('affichageCandidature.php');

	$requeteur= new requeteur;
	if($requeteur->isCandidat($_POST['nom'], $_POST['prenom']) and $_POST['rh']==0)
	{
		$val="";
		$val .="<tbody>";
		$req= $requeteur->getRequete('select numCandidat from candidat join personne on personne.id= candidat.id_pers where personne.id=:id');
		$req->bindValue(':id', $_POST['id']);
		$req->execute();
		$l= $req->fetch();
		$req= $requeteur->getRequete('delete from offre where ref =:ref and id_cand= :num');
		$req->bindValue(':ref', $_POST['ref']);
		$req->bindValue(':num', $l['numCandidat']);
		$req->execute();
		$val .=affichageCandidat();
		$val .="</tbody>";
		echo $val;
	}
	elseif($requeteur->isRh($_POST['nom'], $_POST['prenom']) and $_POST['rh']==1){

		$req= $requeteur->getRequete('delete from offre where ref =:ref and id_cand= :num');
		$req->bindValue(':ref', $_POST['ref']);
		$req->bindValue(':num', $_POST['numCand']);
		$req->execute();
		$val="";
		$val .= "<tbody>";
		
		$val .=affichageRh();

		$val .="</tbody>";
		echo $val;
	}
	

?>