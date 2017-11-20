<?php
	require_once('requeteur.class.php');
	require_once('affichageCandidature.php');
	$requeteur= new requeteur;
	if($requeteur->isCandidat($_POST['id']) and $_POST['rh']==0)
	{
		$val="";
		
		$req= $requeteur->getRequete('select numCandidat from candidat where id_pers= "'.$_POST['id'].'"');
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

		$req2= $requeteur->getRequete('select count(*) as nb from offre where id_cand = (select numCandidat from candidat where id_pers="'.$_POST['id'].'")');	
		$req2->execute();
		$test= $req2->fetch(PDO::FETCH_ASSOC);

		$val .=affichageCandidat();

		echo $val;
	}
	elseif($requeteur->isRh($_POST['id']) and $_POST['rh']==1){
		$val="";
		$req= $requeteur->getRequete('update offre set approuve=1 where ref= :ref and id_cand= :num');
		$req->bindValue(':ref', $_POST['ref']);
		$req->bindValue(':num', $_POST['numCand']);
		$req->execute();
		$val .=affichageRh();
		echo $val;
	}
	
	
?>