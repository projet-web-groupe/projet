<?php
	require_once('requeteur.class.php');
	$requeteur= new requeteur;
	if($requeteur->isCandidat($_POST['nom'], $_POST['prenom']) and $_POST['rh']==0)
	{
		$val="";
		$val .="<tbody><tr class=\"bg-primary\">
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Réf de l'offre</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Lien de l'offre</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Fiche candidat</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" >Accepter</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Refuser</th>
						</tr>";
		
		$req= $requeteur->getRequete('select numCandidat from candidat where id_pers= (select id from personne where nom="'.$_POST['nom'].'" and prenom="'.$_POST['prenom'].'")');
		$req->execute();
		$r= $req->fetch(PDO::FETCH_ASSOC);
		$num= $r['numCandidat'];
		$req= $requeteur->getRequete('delete from offre where ref =:ref and id_cand="'.$num.'"');
		$req->bindValue(':ref', $_POST['ref']);
		$req->execute();
		//$tab["rep"]="reussi";
		$req= $requeteur->getRequete('select ref from offre where id_cand = (select numCandidat from candidat where id_pers= (select id from personne where nom="'.$_POST['nom'].'" and prenom="'.$_POST['prenom'].'"))');	
		$req->execute();
		while($l=$req->fetch(PDO::FETCH_ASSOC)){
			$req= $requeteur->getRequete('select description, label, profil from description where ref="'.$l['ref'].'"');
			$req->execute();
			$r= $req->fetch(PDO::FETCH_ASSOC);
			$val .= "<tr >

					<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
					<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
					<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"inscription.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
					<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
					<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
				</tr>";

		}
		$val .="</tbody>";
		echo $val;
	}
	elseif($requeteur->isRh($_POST['nom'], $_POST['prenom']) and $_POST['rh']==1){
		$val="";
		$val .= "<tbody><tr class=\"bg-primary\">
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Réf de l'offre</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Lien de l'offre</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Fiche candidat</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" >Accepter</th>
							<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Refuser</th>
						</tr>";
		
		$req= $requeteur->getRequete('delete from offre where ref =:ref and id_cand= :num');
		$req->bindValue(':ref', $_POST['ref']);
		$req->bindValue(':num', $_POST['numCand']);
		$req->execute();

		$requeteur= new requeteur;
		$req= $requeteur->getRequete('select ref, id_cand from offre where approuve=0');
		$req->execute();
		while($l=$req->fetch(PDO::FETCH_ASSOC)){
			$val .= "<tr >

						<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>
						<span class=\"numCandRh\" hidden>".$l['id_cand']."</span>
						<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
						<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"inscription.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
						<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
						<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
					</tr>";
		}
		$val .="</tbody>";
		echo $val;
	}
	

?>