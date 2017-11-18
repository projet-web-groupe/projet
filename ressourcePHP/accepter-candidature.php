<?php
	require_once('requeteur.class.php');
	require_once('affichageCandidature.php');
	$requeteur= new requeteur;
	if($requeteur->isCandidat($_POST['nom'], $_POST['prenom']) and $_POST['rh']==0)
	{
		$val="";
		$val .="<tbody>";
		
		$req= $requeteur->getRequete('select numCandidat from candidat where id_pers= (select id from personne where nom="'.$_POST['nom'].'" and prenom="'.$_POST['prenom'].'")');
		$req->execute();
		$r= $req->fetch(PDO::FETCH_ASSOC);
		$num= $r['numCandidat'];
		$req= $requeteur->getRequete('delete from offre where ref =:ref and id_cand !="'.$num.'"');
		$req->bindValue(':ref', $_POST['ref']);
		$req->execute();
		$req= $requeteur->getRequete('delete from offre where ref !=:ref and id_cand ="'.$num.'"');
		$req->bindValue(':ref', $_POST['ref']);
		$req->execute();
		$req= $requeteur->getRequete('update offre set accepte=1 where ref= :ref and id_cand="'.$num.'"');
		$req->bindValue(':ref', $_POST['ref']);
		$req->execute();

		$req2= $requeteur->getRequete('select count(*) as nb from offre where id_cand = (select numCandidat from candidat where id_pers= (select id from personne where nom="'.$_POST['nom'].'" and prenom="'.$_POST['prenom'].'"))');	
		$req2->execute();
		$test= $req2->fetch(PDO::FETCH_ASSOC);

		$val .=affichageCandidat();

		$val .="</tbody>";

		echo $val;
	}
	elseif($requeteur->isRh($_POST['nom'], $_POST['prenom']) and $_POST['rh']==1){
		$val="";
		$val .= "<tbody>";
		$req= $requeteur->getRequete('update offre set approuve=1 where ref= :ref and id_cand= :num');
		$req->bindValue(':ref', $_POST['ref']);
		$req->bindValue(':num', $_POST['numCand']);
		$req->execute();
		$val .=affichageRh();
		$val .="</tbody>";
		echo $val;
	}
	
	
?>